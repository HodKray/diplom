<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public  function loginShow(){
        return view('login');
    }
    public function profileShow(){
        return view('profile');
    }
    public  function login(Request $request){
        Auth::attempt([
            'login'=>$request->login,
            'password'=>$request->password,
        ]);
        return redirect('/profile');
    }
    public  function logout(){
        Auth::logout();

        return redirect('/');
    }
}
