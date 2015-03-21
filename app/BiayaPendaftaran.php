<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BiayaPendaftaran extends Model {

	protected $table ='biaya_pendaftaran';
	protected $guarded =['id'];
	protected $fillable = ['biaya'];

}
