<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function adminShow(){
        return view('admin',[
            'applications'=> Application::all(),
        ]);
    }
}
