<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BiayaPendaftaran extends Model {

	protected $table="biaya_pendaftaran";
	protected $guard=['id'];
	protected $fillable=['biaya'];

}
