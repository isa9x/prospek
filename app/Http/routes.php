<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/beranda',function(){	return view('data.beranda');   });

Route::controller('pendaftaran','PendaftaranController');

Route::get('/paket','ProgramController@paket');

Route::post('/ceksiswa','PendaftaranController@cekSiswa');

Route::get('pendaftaranpaket/{id}','PendaftaranController@getProgram');

Route::get('/data-bayar',function(){	return view('data.data-bayar');   });

Route::get('/data-kelas',function(){	return view('data.data-kelas');   });

Route::get('/bayar',function(){	return view('data.bayar');   });

Route::get('/faktur',function(){	return view('data.faktur');   });

Route::get('home', 'HomeController@index');

Route::get(
	'program/datatables',
	['as'=>'program.datatables',
	'uses'=>'ProgramController@datatables']);

Route::resource('program','ProgramController');

Route::get(
	'sertifikat/datatables',
	['as'=>'sertifikat.datatables',
	'uses'=>'SertifikatController@datatables']);

Route::resource('sertifikat','SertifikatController');

Route::get(
	'biayapendaftaran/datatables',
	['as'=>'biayapendaftaran.datatables',
	'uses'=>'BiayaPendaftaranController@datatables']);

Route::resource('biayapendaftaran','BiayaPendaftaranController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
