<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationsController extends Controller
{
    public function ApplicationCreateShow(){
        return view('application.create',[
            'applications'=>Application::all(),
            'tours'=>Tour::all(),
        ]);
    }
    public function ApplicationCreate(Request $request){
        Application::create([
            'email'=>Auth::user()->email,
            'user_id'=>Auth::user()->id,
            'tours_id'=>$request->tours_id,
            'city_respond'=>$request->city_respond
        ]);

    }


}
