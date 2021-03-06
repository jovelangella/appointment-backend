<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appointment;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//https://www.cloudways.com/blog/routing-in-laravel/

Route::get('/locations', [Appointment::class, 'locations']);
Route::get('/time/{locn_cde?}/{day_numb?}', [Appointment::class, 'time']);

Route::post('/appointment/create', [Appointment::class, 'save']);
