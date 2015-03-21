<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

	protected $table ='pembayaran';
	protected $guarded =['id'];
	protected $fillable = [
		'id_program',
		'tgl',
		'jumlah'
	];
}
