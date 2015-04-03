<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model {

	protected $table="paket";
	protected $guard=['id'];
	protected $fillable=[
		'biaya_paket',
		'biaya_sertifikat',
		'nama'
	];

}
