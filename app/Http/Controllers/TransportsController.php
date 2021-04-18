<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;

class TransportsController extends Controller
{
    public  function TransportsShow(){
        return view('transports.page',[
            'transports'=>Transport::all()
        ]);
    }
    public  function TransportCreateShow(){
        return view('transports.create',[
            'transports'=>Transport::all()
        ]);
    }
    public  function TransportCreate(Request $request){
            Transport::create($request->all());
            return redirect ('/transports');

    }
    public  function TransportUpdateShow($id){
        return view('transports.update',[
            'transport'=>Transport::find($id)
        ]);
    }
    public  function TransportUpdate($id, Request $request){
        Transport::find($id)->update($request->all());
        return redirect ('/transports');

    }
    public  function deleteTransport($id){
        Transport::find($id)->delete();
        return redirect ('/transports');

    }
}
