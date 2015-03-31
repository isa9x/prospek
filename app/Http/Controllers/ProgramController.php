<?php namespace App\Http\Controllers;

use App\Program;
use App\Http\Requests;
use App\Http\Requests\ProgramRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;

class ProgramController extends Controller {

	
	public function index()
	{
		$program= Program::all();
		return view('program.index', compact('program'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		return view('program.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProgramRequest $request)
	{
		//
		Program::create($request->all());
		//Auth::user()->articles()->save($article);
		return redirect('program');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
		$program=Program::findOrFail($id);
		return view('program.show',compact('program'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$program=Program::findOrFail($id);
		return view('program.edit',compact('program'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		Program::findOrFail($id)->update($request->all());
		return redirect('program');
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
		Program::findOrFail($id)->delete();
		return redirect()->route('program.index');
	}

	public function datatables(){
		$program = Program::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($program as $value) {
			$l[0] = $value->kode;
			$l[1] = $value->nama;
			$l[2] = $value->biaya;
			$l[3] = "
				<a href='".route('program.edit',$value->id)."' data-toggle='modal' data-target='#myModal'>Edit</a> - 
				<a href='".route('program.destroy',$value->id)."' data-method = 'DELETE' data-confirm='yakin untuk menghapus?' >Hapus</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

}
