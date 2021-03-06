<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable =[
        'title'
    ];
    public function countries(){
        return $this->hasMany(Countries::class, 'city_id');
    }
    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        City::deleting(function ($city) {
            $city->countries()->delete();
        });
    }
}
