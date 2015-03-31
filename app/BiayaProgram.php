<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BiayaProgram extends Model {

	protected $table ='biaya_program';
	protected $guarded =['id'];
	protected $fillable = [
		'kode',
		'nama',
		'biaya'
	];

}
