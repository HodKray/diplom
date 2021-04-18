<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Countries;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function serviceShow()
    {
        return view('services.page', [
            'services' => Service::all()
        ]);
    }

    public function serviceCreateShow()
    {
        return view('services.create', [
            'services' => Service::all(),
            'cities' => City::all(),
            'countries' => Countries::all()
        ]);
    }
    public function serviceUpdateShow($id)
    {
        return view('services.service_update', [
            'service' => Service::find($id),
            'cities' => City::all(),
            'countries' => Countries::all()
        ]);
    }

    public function serviceCreate(Request $request)
    {
        Service::create([
            'countries_id' => $request->countries_id,
            'residence' => $request->residence,
            'feeding' => $request->feeding,
            'excursion' => $request->excursion,
        ]);
        return redirect('/services');

    }

    public function updateService($id, Request $request)
    {
        Service::find($id)->update([
            'city_id' => $request->citi_id,
            'residence' => $request->residence,
            'feeding' => $request->feeding,
            'excursion' => $request->excursion,
        ]);
        return redirect('/services');
    }
    public function deleteService($id)
    {
        Service::find($id)->delete();
        return redirect('/services');
    }
}
