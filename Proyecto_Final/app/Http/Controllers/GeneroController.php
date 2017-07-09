<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Genero;
use Session;
use Redirect;
class GeneroController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /genero
	 *
	 * @return Response
	 */

 public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		//

		$genero = Genero::All();
		return view('genero.index',compact('genero'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /genero/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('genero.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /genero
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$genero = new Genero;
		$genero->nombre = $request->nombre;
		$genero->save();
		/*
	\App\Genero::create([
		'NOMBRE'=>$request['name']
		]);
		*/
		Session::flash('message',"se creo un nuevo genero: '".$genero->cod."' exitosamente");
		return Redirect::to('/genero');
		
	}

	/**
	 * Display the specified resource.
	 * GET /genero/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /genero/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$genero =Genero::find($id);
		return view('genero.edit',['genero'=>$genero]);

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /genero/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//
		Genero::where('cod',$id)->update(['nombre'=>$request->nombre]);
		$genero =Genero::find($id);
		Session::flash('message',"se edito el genero: '".$genero->cod."' exitosamente");
		return Redirect::to('/genero');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /genero/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		Genero::where('cod',$id)->delete($id);
		
		Session::flash('message',"se elimino el genero: '".$id."' exitosamente");
		return Redirect::to('/genero');
	}

}