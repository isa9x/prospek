<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayar extends Model {

	protected $table="bayar";
	protected $guard=['id'];
	protected $fillable=[
		'id_total_bayar',
		'id_siswa',
		'jumlah',
		'created_at'
	];

	public function totalBayar(){
		return $this->belongsTo('App\TotalBayar','id_total_bayar');
	}
}