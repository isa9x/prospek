<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pendaftaran;
use App\BiayaPendaftaran;
use App\Siswa;
use App\Program;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use DB;


class PendaftaranController extends Controller {

	public function getIndex()
	{
		$biaya=BiayaPendaftaran::find(1)->biaya;
		return view('data.pendaftaran')->with('biaya',$biaya);
	}

	public function postIndex(Request $request)
	{
		$siswa=$request->input('siswa');
		$bp=$request->input('pendaftaran');
		$bp['tgl']=date('Y-m-d');
			DB::transaction(function()use($siswa,$bp){
			Siswa::create($siswa);
			Pendaftaran::create($bp);

		});

	}
}
