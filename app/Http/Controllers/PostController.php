<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    //
     public function create()
     {

        return view('posts.create');
     }

     public function store(Request $request)
     {
       // dd($request);
     $data=  $request->validate(
        [
            'caption'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg'
        ]
        );
       //  dd($request->image);
       $newImageName= time().'-'. $request->name . '.' . $request->image->extension();
       //dd($newImageName);
       //image fit with intervention image package
       $request->image->move(public_path('images'),$newImageName);
     $image = Image::make(public_path('images/'.$newImageName.''))->fit(1200,1200);
     $image->save();

    //authenticated user relationship with post which helps to insert data without giving use_id
        Auth::user()->posts()->create([

            'caption'=>$data['caption'],
            'image'=>$newImageName
        ]);
        return redirect()->route('index');
     }
     //Post model is type hinted actually it is called route model binding
     public function show(Post $post)
     {
       //  dd($post);
       return view('posts.show',compact('post'));
     }
}
