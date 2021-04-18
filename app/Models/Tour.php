<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable =[
        'service_id','departure_date','arrival_date','price','photo','transport_id','quantity_man'
    ];
    public function services(){
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function transports(){
        return $this->belongsTo(Transport::class, 'transport_id');
    }
}
