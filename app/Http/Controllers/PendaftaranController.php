<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BiayaPendaftaran;
use App\Siswa;
use App\TotalBayar;
use App\Paket;
use App\Bayar;
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
		$paket=Paket::lists('nama','id');
		return view('data.form-paket')->with('paket',$paket);
	}

	public function cekSiswa(Request $request)
	{
		$siswa=$request->input('nama');
		$tgl=$request->input('tgl');
		$nama=DB::table('siswa')->select('*')->where('nama','=',$siswa)->where('tgl_lahir','=',$tgl)->count();
		if($nama>0){
			$cek=1;
			$siswa1=Siswa::where('nama','=',$siswa)->where('tgl_lahir','=',$tgl)->first();
			return response()->json(['siswa'=>$siswa1,'cek'=>$cek]);
		}else{
			$cek=0;
			return response()->json('cek',$cek);
		}
	}

	public function getProgram($id)
	{
		$paket=Paket::find($id);
		return response()->json(["bpaket"=> $paket->biaya_paket, "bsertifikat"=>$paket->biaya_sertifikat]);
	}

	public function postIndex(Request $request)
	{
		$siswa=$request->input('siswa');
		$cek=$request->input('cek');
		if($cek==0){
			$baru=Siswa::create($siswa);
			$baru->nis=1000+$baru->id;
			$baru->save();

			Session::put('siswa',$baru);
			return redirect()->action('PendaftaranController@getPaket');
		}else{

			$lama=Siswa::where('nis','=',$request->input('siswa.nis'))->first()->toArray();
			Session::put('siswa',$lama);
			return redirect()->action('PendaftaranController@getPaket');
		}
	}

	public function postPaket(Request $request)
	{
		$id_siswa=Session::get('siswa.id');
		$id_paket=$request->input('Paket');
		$total_paket=$request->input('Total');

		$total_bayar=TotalBayar::create([
			'id_siswa'=>$id_siswa,
			'id_paket'=>$id_paket,
			'biaya_paket'=>$total_paket
		]);

		$nama=Paket::find($id_paket)->nama;
		Session::put('paket',$total_bayar);
		Session::put('nama_paket',$nama);
		return redirect()->action('PendaftaranController@getBayar');
	}

	public function getBayar()
	{
		return view('data.bayar');
	}

	public function postBayar(Request $request)
	{
		$id_siswa=Session::get('siswa.id');
		$id_total_bayar=Session::get('paket')['id'];
		$jumlah=$request->input('Bayar');
		$sisa=$request->input('SisaS');
		$ket=$request->input('Ket');

		$bayar=Bayar::create([
			'id_siswa'=>$id_siswa,
			'id_total_bayar'=>$id_total_bayar,
			'jumlah'=>$jumlah
		]);

		Session::put('bayar',$bayar);
		Session::put('sisa',$sisa);
		Session::put('ket',$ket);
		return redirect()->action('PendaftaranController@getFaktur');
	}

	public function getFaktur()
	{
		return view('data.faktur');
	}
}
