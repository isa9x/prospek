<?php namespace App\Http\Controllers;

use App\Siswa;
use App\TotalBayar;
use App\Paket;
use App\Bayar;
use App\Http\Requests;
use App\Http\Requests\SiswaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;

class SiswaController extends Controller {

	
	public function index()
	{
		$siswa= Siswa::all();
		return view('siswa.index', compact('siswa'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return view('siswa.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SiswaRequest $request)
	{
		//
		Siswa::create($request->all());
		//Auth::user()->articles()->save($article);
		return redirect('siswa');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
		$siswa=Siswa::findOrFail($id);
		return view('siswa.show',compact('siswa'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$siswa=Siswa::findOrFail($id);
		return view('siswa.edit',compact('siswa'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		Siswa::findOrFail($id)->update($request->all());
		return redirect('siswa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Siswa::findOrFail($id)->delete();
		return redirect()->route('siswa.index');
	}

	public function bayarPaket($id_siswa,$id_total_bayar)
	{	
		$totalbayar=TotalBayar::findOrFail($id_total_bayar);
		return view('siswa.bayarpaket')->with('totalbayar',$totalbayar);
	}

	public function datatables(){
		$siswa=Siswa::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($siswa as $value) {
			$l[0] = $value->id;
			$l[1] = $value->nis;
			$l[2] = $value->nama;
			$l[3] = $value->tempat;
			$l[4] = $value->tgl_lahir;
			$l[5] = $value->nama_ortu;
			$l[6] = $value->hp;
			$l[7] = $value->alamat;
			$l[8] = "
				<a href='".route('siswa.show',$value->id)."'>Detail</a> - 
				<a href='".route('siswa.edit',$value->id)."' data-toggle='modal' data-target='#myModal'>Edit</a> - 
				<a href='".route('siswa.destroy',$value->id)."' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

	public function paketdatatables($id){
		$siswa=Siswa::findOrFail($id);
		$data=array();
		$l=array();
		$i=0;
		foreach ($siswa->totalBayar as $sp) {
			$l[0] = $sp->paket->nama;
			$l[1] = $sp->paket->biaya_paket + $sp->paket->biaya_sertifikat;
			$l[2] = ($sp->sisa==0)?"Lunas":"Belum Lunas";
			$l[3] = "
				<a href='".route('siswa.showbayar',[$siswa->id,$sp->id])."'>Detail Pembayaran</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

	public function showBayar($id_siswa,$id_total_bayar){

		return view('siswa.bayar')->with('id_siswa',$id_siswa)->with('id_total_bayar',$id_total_bayar);
	}



	public function bayardatatables($id_siswa,$id_total_bayar){
		$bayar=Bayar::where('id_siswa','=',$id_siswa)->where('id_total_bayar','=',$id_total_bayar)->get();
		$data=array();
		$l=array();
		$i=0;
		$total=$bayar[0]->totalBayar->biaya_paket;
		foreach ($bayar as $byr) {
			$total-=$byr->jumlah;
			$l[0] = $byr->jumlah;
			$l[1] = $byr->created_at->toDateString();
			$l[2] = $total;
		
			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

}