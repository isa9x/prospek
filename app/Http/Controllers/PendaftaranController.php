<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pendaftaran;
use App\BiayaPendaftaran;
use App\Siswa;
use App\Program;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;


class PendaftaranController extends Controller {

	public function getIndex()
	{
		$biaya=BiayaPendaftaran::find(1)->biaya;
		return view('data.pendaftaran')->with('biaya',$biaya);
	}

	public function postIndex(Request $request)
	{

	}
}
