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
   // return $request->user();
});

Route::get('user',['uses' => 'PenggunaController@list']);
Route::get('user/{id}',['uses' => 'PenggunaController@getById']);
Route::post('user',['uses' => 'PenggunaController@create']);
Route::put('user/{id}',['uses' => 'PenggunaController@update']);
Route::delete('user/{id}',['uses' => 'PenggunaController@delete']);

// Guru
Route::get('user/guru/{id}',['uses' => 'PenggunaController@tampilguru']);
Route::get('user/soal/subject/{id}',['uses' => 'PenggunaController@getSoalById']);

// Soal
Route::get('soal',['uses' => 'PenggunaController@getSoal']);
  
//siswa_smkn3bgr
Route::get('siswa', ['uses' => 'gilunkcontrol@list']);
Route::get('siswa/{nis}', ['uses' => 'gilunkcontrol@getbyid']);
Route::post('siswa', ['uses' => 'gilunkcontrol@create']);
Route::put('siswa/{nis}', ['uses' => 'gilunkcontrol@update']);
Route::delete('siswa/{nis}', ['uses' => 'gilunkcontrol@delete']);

//guru_smkn3bgr
Route::get('guru', ['uses' => 'gilunkcontrol@listguru']);
Route::get('guru/{id_guru}', ['uses' => 'gilunkcontrol@getbyidguru']);
Route::post('guru', ['uses' => 'gilunkcontrol@createguru']);
Route::put('guru/{id_guru}', ['uses' => 'gilunkcontrol@updateguru']);
Route::delete('guru/{id_guru}', ['uses' => 'gilunkcontrol@deleteguru']);

// Hobi
Route::get('hobi/{id}', ['uses' => 'gilunkcontrol@getbyid']);
