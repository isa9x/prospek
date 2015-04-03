<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pendaftaran;
use App\Sertifikat;
use App\BiayaPendaftaran;
use App\Siswa;
use App\Program;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use DB;
use Session;


class PendaftaranController extends Controller {

	public function getIndex()
	{
		$biaya=BiayaPendaftaran::find(1)->biaya;
		return view('data.pendaftaran')->with('biaya',$biaya);
	}


	public function getPaket()
	{
		$program=Program::lists('nama','id');
		$sertifikat=Sertifikat::find(1)->biaya;
		return view('data.form-paket')->with('program',$program)->with('sertifikat',$sertifikat);
	}

	public function getProgram($id)
	{
		$program=Program::find($id);
		return response()->json($program->biaya);
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
		Session::put('siswa',$siswa);
		return redirect()->action('PendaftaranController@getPaket');
	}

	public function postPaket(Request $request)
	{
		$siswa=$request->input('siswa');
		$bp=$request->input('pendaftaran');
		$bp['tgl']=date('Y-m-d');
			DB::transaction(function()use($siswa,$bp){
			Siswa::create($siswa);
			Pendaftaran::create($bp);

		});
		Session::put('siswa',$siswa);
		return redirect()->action('PendaftaranController@getPaket');
	}


}
