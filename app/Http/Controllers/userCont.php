<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userCont extends Controller
{
    //
    // function auth(Request $req){
    //     $y = $req->only('email','password');
    //     if(Auth::attempt($y)){
    //         return redirect('portofolio');
    //     }
    //     return redirect()->back();
    // }

    function logout(){
        auth::logout();
        return redirect('/');
    }
}
