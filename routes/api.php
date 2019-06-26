<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('siswa', ['uses' => 'gilunkcontrol@list']);
Route::get('siswa/{nis}', ['uses' => 'gilunkcontrol@getbyid']);
Route::post('siswa', ['uses' => 'gilunkcontrol@create']);
Route::put('siswa/{nis}', ['uses' => 'gilunkcontrol@update']);
Route::delete('siswa/{nis}', ['uses' => 'gilunkcontrol@delete']);

// Hobi
Route::get('hobi/{id}', ['uses' => 'gilunkcontrol@getbyid']);