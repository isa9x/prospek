<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {

	protected $table="siswa";
	protected $guard=['id'];
	protected $fillable=[
		'nis',
		'nama',
		'tempat',
		'tgl_lahir',
		'nama_ortu',
		'alamat',
		'hp',
		'biaya_pendaftaran'
	];

	public function totalBayar(){
		return $this->hasMany('App\TotalBayar','id_siswa');
	}

}
