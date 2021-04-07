<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    function login(Request $req){
        $user_info = User::where(['email'=> $req->Email])->first();
        if( !$user_info ||  !Hash::check($req->Pass, $user_info->password)){
            return "incoorect pass";
        }
        else{
            $req->session()->put('user',$user_info);
            return redirect('/');
        }
    }

    function user_registration(Request $req){
        //return view('registration');
        $user = new User;
        $user->user = $req->username;
        $user->email = $req->Email;
        $user->password = Hash::make($req->Pass);
        $user->save();
        return redirect('/login');
    }
}
