<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model {

	protected $table ='sertifikat';
	protected $guarded =['id'];
	protected $fillable = ['biaya'];

}
