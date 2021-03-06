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
Route::resource('paket','ProgramController');


Route::get(
	'siswa/paketdatatables/{id}',
	['as'=>'siswa.paketdatatables',
	'uses'=>'SiswaController@paketdatatables']);

Route::get(
	'siswa/datatables',
	['as'=>'siswa.datatables',
	'uses'=>'SiswaController@datatables']);

Route::get('siswa/pembayaran/{id_siswa}/{id_total_bayar}',
	['as'=>'siswa.showbayar',
	'uses'=>'SiswaController@showBayar']);

Route::get(
	'siswa/bayardatatables/{id_siswa}/{id_total_bayar}',
	['as'=>'siswa.datatablesbayar',
	'uses'=>'SiswaController@bayardatatables']);

Route::get(
	'siswa/bayarpaket/{id_siswa}/{id_total_bayar}',
	['as'=>'siswa.bayarpaket',
	'uses'=>'SiswaController@bayarPaket']);

Route::resource('siswa','SiswaController');



Route::get(
	'biayapendaftaran/datatables',
	['as'=>'biayapendaftaran.datatables',
	'uses'=>'BiayaPendaftaranController@datatables']);

Route::resource('biayapendaftaran','BiayaPendaftaranController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
