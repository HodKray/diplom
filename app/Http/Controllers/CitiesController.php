<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function CityShow(){
        return view('city.page',[
            'cities'=>City::all()
        ]);
    }
    public function CityCreateShow(){
        return view('city.create',[
            'cities'=>City::all()
        ]);
    }
    public function CityUpdateShow($id){
        return view('city.update',[
            'city'=>City::find($id)
        ]);
    }
    public function CityCreate(Request $request){
        City::create($request->all());
        return redirect('/cities');
    }
    public function CityUpdate($id, Request $request){
        City::find($id)->update($request->all());
        return redirect('/cities');
    }
    public function deleteCity($id){
        City::find($id)->delete();
        return redirect('/cities');
    }
}
