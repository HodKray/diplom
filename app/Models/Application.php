<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable =[
        'email','user_id','tours_id','city_respond_id'
    ];
    public function countries(){
        return $this->belongsTo(Countries::class,'city_respond_id');
    }

}
