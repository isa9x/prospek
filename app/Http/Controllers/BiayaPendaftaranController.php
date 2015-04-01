<?php namespace App\Http\Controllers;

use App\BiayaPendaftaran;
use App\Http\Requests;
use App\Http\Requests\BiayaPendaftaranRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;

class BiayaPendaftaranController extends Controller {

	
	public function index()
	{
		$biayapendaftaran= BiayaPendaftaran::all();
		return view('biayapendaftaran.index', compact('biayapendaftaran'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return view('biayapendaftaran.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BiayaPendaftaranRequest $request)
	{
		//
		BiayaPendaftaran::create($request->all());
		//Auth::user()->articles()->save($article);
		return redirect('biayapendaftaran');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
		$biayapendaftaran=biayapendaftaran::findOrFail($id);
		return view('biayapendaftaran.show',compact('biayapendaftaran'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$biayapendaftaran=biayapendaftaran::findOrFail($id);
		return view('biayapendaftaran.edit',compact('biayapendaftaran'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		biayapendaftaran::findOrFail($id)->update($request->all());
		return redirect('biayapendaftaran');
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
		biayapendaftaran::findOrFail($id)->delete();
		return redirect()->route('biayapendaftaran.index');
	}

	public function datatables(){
		$biayapendaftaran = biayapendaftaran::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($biayapendaftaran as $value) {
			$l[0] = $value->biaya;
			$l[1] = "
				<a href='".route('biayapendaftaran.edit',$value->id)."' data-toggle='modal' data-target='#myModal'>Edit</a> 
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

}
