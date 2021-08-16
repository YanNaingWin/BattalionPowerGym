<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\GymService;
use App\Http\Controllers\GymServiceController;


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

// Route::get('/getGymServices', 'GymServiceController@index');
// Route::post('/getGymServices', 'GymServiceController@store');
// Route::put('/getGymServices', 'GymServiceController@update');
// Route::delete('/getGymServices', 'GymServiceController@destroy');

Route::resource('gymServices', GymServiceController::class);

// Route::get('/getGymServices', function() {
//     $gymService = GymService::create(['title' => 'one piece', 'description' => 'one piece 2']);
//     return $gymService;
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
