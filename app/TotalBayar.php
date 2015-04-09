<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalBayar extends Model {

	protected $table="total_bayar";
	protected $guard=['id'];
	protected $fillable=[
		'id_siswa',
		'id_paket',
		'biaya_paket',
		'sisa'
	];

	public function paket(){
		return $this->belongsTo('App\Paket','id_paket');
	}

	public function siswa(){
		return $this->belongsTo('App\Siswa','id_siswa');
	}

	public function bayar(){
		return $this->hasMany('App\Bayar','id_total_bayar');
	}
}
