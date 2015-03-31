<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model {

	protected $table ='program';
	protected $guarded =['id'];
	protected $fillable = [
		'kode',
		'nama',
		'biaya'
	];

}
