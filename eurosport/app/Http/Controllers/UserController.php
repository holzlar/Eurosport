<?php

namespace App\Http\Controllers;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller

{
    public function profile(){
        return view('profile',array('user'=>Auth::user()));
    }
    public function update_avatar(Request $request){
        if($request->hasFile('avatar')) {
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/cover_image', $fileNameToStore);
        }
        else{
                $fileNameToStore='noavatar.jpg';
            }
            $user=Auth::user();
            $user->avatar=$fileNameToStore;
            $user->save();
        return view('profile',array('user'=>Auth::user()));
    }
}
