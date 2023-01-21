<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function index(User $user)
    {
       // $user= User::find($user);
       // $user=  Auth::user();
       // $user= auth()->user();

        return view ('dashboard',['user'=>$user]);

    }

    public function show($user)
    {
       // dd($user);
      // dd( User::find($user));
      $user= User::find($user);
      return view ('profile',['user'=>$user]);
    }
    public function edit(User $user)
    {
      // dd($user);
      $this->authorize('update',$user->profile);
      return view('profileEdit',compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $this->authorize('update',$user->profile);
        //dd($request);
       // dd($user);
        $data=  $request->validate(
            [
                'title'=>'required',
                'description'=>'required',
                'url'=>'url',
                'image'=>'',
            ]
            );
        if($request->image)
        {
            $newImageName= time().'-'. $request->name . '.' . $request->image->extension();
            //dd($newImageName);
            //image fit with intervention image package
            $request->image->move(public_path('images'),$newImageName);
          $image = Image::make(public_path('images/'.$newImageName.''))->fit(1000,1000);
          $image->save();
        }
        else {
            $newImageName= Auth::user()->profile->image ;
        }
        Auth::user()->profile->update(array_merge(
            $data,['image'=>$newImageName]
        ));

        return redirect()->route('index',$user->id);

    }
}
