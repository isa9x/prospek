<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalBayar extends Model {

	protected $table="total_bayar";
	protected $guard=['id'];
	protected $fillable=[
		'id_siswa',
		'id_paket',
		'biaya_paket'
	];

}
