<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function CountriesShow(){
        return view('countries.country_table',[
            'countries'=>Countries::all()
        ]);
    }
    public function CountryCreateShow(){
        return view('countries.create',[
            'countries'=>Countries::all(),
            'cities'=>City::all()
        ]);
    }
    public function CountryUpdateShow($id){
        return view('countries.update',[
            'country'=>Countries::find($id),
            'cities'=>City::all()
        ]);
    }
    public function CountryCreate(Request $request){
        $file = $request->file('photo_country')->getClientOriginalName();
        Countries::create([
            'title'=>$request->title,
            'city_id'=>$request->city_id,
            'photo_country'=>$file
        ]);
        $request->file('photo_country')->move(public_path('img'), $file);
        return redirect('/countries');
    }
    public function CountryUpdate($id, Request $request){
        $file = $request->file('photo_country')->getClientOriginalName();
        Countries::find($id)->update([
            'title'=>$request->title,
            'city_id'=>$request->city_id,
            'photo_country'=>$file
        ]);
        $request->file('photo_country')->move(public_path('img'), $file);
        return redirect('/countries');
    }
    public function deleteCountry($id){
        Countries::find($id)->delete();
        return redirect('/countries');
    }

}
