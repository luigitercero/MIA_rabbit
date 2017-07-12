<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Publicidad;
use Illuminate\Http\Request;
use Session;
use Redirect;
class PublicidadController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /publicidad
	 *
	 * @return Response
	 */

public function __construct()
    {
        $this->middleware('auth');
		 $this->middleware('admin');
		 
    }

	public function index()
	{
		//
		$publicidad = Publicidad::All();
		return view('publicidad.index',compact('publicidad'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /publicidad/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('publicidad.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /publicidad
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
	
		//
		
		$publicidad = new publicidad;
		$publicidad ->nombre= $request->nombre;
		$publicidad ->eslogan=$request->eslogan;
		$publicidad ->mision=$request->mision;
		$publicidad->vision =$request->vision;
		//$publicidad->FREGISTRO=$request->fregistro;
		$publicidad->aboutme=$request->aboutme;
		$publicidad->video = $request->video;
		$publicidad->imagen =$request->imagen;
		$publicidad->save();
		Session::flash('message',"se creo un nuevo publicidad: '".$publicidad->name."' exitosamente");
		return Redirect::to('/publicidad');
		
	}

	/**
	 * Display the specified resource.
	 * GET /publicidad/{id}
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
	 * GET /publicidad/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

		$publicidad =Publicidad::find($id);
		
		return view('publicidad.edit',['publicidad'=>$publicidad]);

	}

/**
	 * Update the specified resource in storage.
	 * PUT /usuario/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update($id, Request $request)
	{
		//
		$publicidad = Publicidad::find($id);
		$publicidad ->nombre= $request->nombre;
		$publicidad ->eslogan=$request->eslogan;
		$publicidad ->mision=$request->mision;
		$publicidad->vision =$request->vision;
		//$publicidad->FREGISTRO=$request->fregistro;
		$publicidad->aboutme=$request->aboutme;
		$publicidad->video = $request->video;
		$publicidad->imagen =$request->imagen;
		$publicidad->save();
		
		Session::flash('message',"se edito el usuario: '"."' exitosamente");
		return Redirect::to('/publicidad');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /usuario/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Publicidad::where('id',$id)->delete($id);
		Session::flash('message',"se elimino el usuario: '".$id."' exitosamente");
		return Redirect::to('/publicidad');
	}

}