<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Tour;
use App\Models\Transport;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function toursShow()
    {
        return view('tours.page', [
            'tours' => Tour::all(),
            'services' => Service::all()
        ]);
    }
    public function tourShow($id)
    {
        return view('tours.tour', [
            'tour' => Tour::find($id),
            'services' => Service::all()
        ]);
    }
    public function toursAllShow()
    {
        return view('tours.tours_all', [
            'tours' => Tour::paginate(4),
            'services' => Service::all()
        ]);
    }

    public function toursCreateShow()
    {
        return view('tours.create', [
            'tours' => Tour::all(),
            'services' => Service::all(),
            'transports' => Transport::all()
        ]);
    }
    public function updateShow($id)
    {
        return view('tours.update', [
            'tour'=>Tour::find($id),
            'services' => Service::all(),
            'transports' => Transport::all()
        ]);
    }

    public function toursCreate(Request $request)
    {
        $file = $request->file('photo')->getClientOriginalName();
        Tour::create([
            'service_id'=>$request->service_id,
            'departure_date'=>$request->departure_date,
            'arrival_date'=>$request->arrival_date,
            'price'=>$request->price,
            'photo'=>$file,
            'transport_id'=>$request->transport_id,
            'quantity_man'=>$request->quantity_man
        ]);
        $request->file('photo')->move(public_path('img'), $file);
        return redirect('/tours');
    }
    public function updateTour($id, Request $request)
    {
        Tour::find($id)->update($request->all());
        return redirect('/tours');
    }

    public function deleteTour($id){
        Tour::find($id)->delete();
        return redirect('/tours');
    }
}
