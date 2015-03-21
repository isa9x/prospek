<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model {

	protected $table ='pendaftaran';
	protected $guarded =['id'];
	protected $fillable = ['tgl'];

}
