<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function regShow(){
        return view('registration');
    }

    public function reg(Request $request){
        if($request->password ==  $request->confirm_password){
            User::create([
                'login'=>$request->login,
                'telephone'=>$request->telephone,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            return redirect('/login');
        }else{
            return redirect('/registration');
        }


    }
}
