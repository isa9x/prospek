<?php namespace App\Http\Controllers;

use App\Sertifikat;
use App\Http\Requests;
use App\Http\Requests\SertifikatRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;

class SertifikatController extends Controller {

	
	public function index()
	{
		$sertifikat= Sertifikat::all();
		return view('sertifikat.index', compact('sertifikat'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return view('sertifikat.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SertifikatRequest $request)
	{
		//
		Sertifikat::create($request->all());
		//Auth::user()->articles()->save($article);
		return redirect('sertifikat');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
		$sertifikat=Sertifikat::findOrFail($id);
		return view('sertifikat.show',compact('sertifikat'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sertifikat=Sertifikat::findOrFail($id);
		return view('sertifikat.edit',compact('sertifikat'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		Sertifikat::findOrFail($id)->update($request->all());
		return redirect('sertifikat');
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
		Sertifikat::findOrFail($id)->delete();
		return redirect()->route('sertifikat.index');
	}

	public function datatables(){
		$sertifikat = Sertifikat::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($sertifikat as $value) {
			$l[0] = $value->biaya;
			$l[1] = "
				<a href='".route('sertifikat.edit',$value->id)."' data-toggle='modal' data-target='#myModal'>Edit</a> - 
				<a href='".route('sertifikat.destroy',$value->id)."' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

}
