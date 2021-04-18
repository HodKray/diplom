<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function mainShow(){
       return view('main',[
            'tours'=>Tour::latest()->paginate(4)
       ]);
   }
    public function About(){
        return view('about');
    }
}
