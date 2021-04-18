<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $fillable =[
        'title'
    ];
    public function transports(){
        return $this->hasMany(Tour::class, 'transport_id');
    }
}
