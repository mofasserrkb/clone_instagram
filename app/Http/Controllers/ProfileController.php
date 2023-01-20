<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index($user)
    {
        $user= User::find($user);
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
      return view('profileEdit',compact('user'));
    }
}
