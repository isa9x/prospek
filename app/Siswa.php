<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {

	protected $table ='siswa';
	protected $guarded =['id'];
	protected $fillable = [
		'nis',
		'no_ktp',
		'nama',
		'tempat',
		'tgl_lahir',
		'hp',
		'nama_ortu',
		'alamat'
	];
}
