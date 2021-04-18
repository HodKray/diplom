<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\TransportsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'profile', 'middleware'=>'admin'], function(){

});
Route::get('/', [MainController::class, 'mainShow']);
Route::get('/About', [MainController::class, 'About']);
Route::get('/registration', [RegistrationController::class, 'regShow']);
Route::post('/registration', [RegistrationController::class, 'reg']);
Route::group(['middleware'=> 'guest'],function(){
Route::get('/login', [AuthController::class, 'loginShow']);
Route::post('/login', [AuthController::class, 'login']);
});
Route::group(['middleware'=> 'auth'],function(){
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/profile', [AuthController::class, 'profileShow']);
Route::get('/admin', [AdminController::class, 'adminShow']);
});
Route::group(['prefix'=>'applications'],function(){
    Route::get('/create', [ApplicationsController::class, 'ApplicationCreateShow']);
    Route::get('/post', [ApplicationsController::class, 'ApplicationCreate']);
});
Route::get('/toursAll', [ToursController::class, 'toursAllShow']);
Route::group(['prefix'=>'tours', 'middleware' => 'auth'],function(){
Route::get('/', [ToursController::class, 'toursShow']);
Route::get('/tour/{id}', [ToursController::class, 'tourShow']);
Route::get('/create', [ToursController::class, 'toursCreateShow']);
Route::post('/create', [ToursController::class, 'toursCreate']);
Route::get('/update/{id}', [ToursController::class, 'updateShow']);
Route::post('/update/{id}', [ToursController::class, 'updateTour']);
    Route::get('/delete/{id}', [ToursController::class, 'deleteTour']);
});
Route::group(['prefix'=>'services' ,'middleware' => 'auth'],function(){
Route::get('/', [ServicesController::class, 'serviceShow']);
Route::get('/create', [ServicesController::class, 'serviceCreateShow']);
Route::post('/create', [ServicesController::class, 'serviceCreate']);
Route::get('/service_update/{id}', [ServicesController::class, 'serviceUpdateShow']);
Route::post('/update/{id}', [ServicesController::class, 'updateService']);
Route::get('/delete/{id}', [ServicesController::class, 'deleteService']);
});
Route::group(['prefix'=>'countries' ,'middleware' => 'auth'],function(){
    Route::get('/', [CountriesController::class, 'CountriesShow']);
    Route::get('/create', [CountriesController::class, 'CountryCreateShow']);
    Route::post('/create', [CountriesController::class, 'CountryCreate']);
    Route::get('/update/{id}', [CountriesController::class, 'CountryUpdateShow']);
    Route::post('/update/{id}', [CountriesController::class, 'CountryUpdate']);
    Route::get('/delete/{id}', [CountriesController::class, 'deleteCountry']);
});
Route::group(['prefix'=>'cities' ,'middleware' => 'auth'],function(){
    Route::get('/', [CitiesController::class, 'CityShow']);
    Route::get('/create', [CitiesController::class, 'CityCreateShow']);
    Route::post('/create', [CitiesController::class, 'CityCreate']);
    Route::get('/update/{id}', [CitiesController::class, 'CityUpdateShow']);
    Route::post('/update/{id}', [CitiesController::class, 'CityUpdate']);
    Route::get('/delete/{id}', [CitiesController::class, 'deleteCity']);
});
Route::group(['prefix'=>'transports' ,'middleware' => 'auth'],function(){
    Route::get('/', [TransportsController::class, 'TransportsShow']);
    Route::get('/create', [TransportsController::class, 'TransportCreateShow']);
    Route::post('/create', [TransportsController::class, 'TransportCreate']);
    Route::get('/update/{id}', [TransportsController::class, 'TransportUpdateShow']);
    Route::post('/update/{id}', [TransportsController::class, 'TransportUpdate']);
    Route::get('/delete/{id}', [TransportsController::class, 'deleteTransport']);
});


//Route::get('/admin', [AdminController::class, 'adminShow']);Route::get('/profile', [AuthController::class, 'profileShow']);
//Route::get('/admin', [AdminController::class, 'adminShow']);
