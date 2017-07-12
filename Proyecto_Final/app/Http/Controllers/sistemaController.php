<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Session;
use Redirect;
use App\Sistema;
use App\Directorio;

use DB;

class SistemaController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /sistema
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//return "hola";
		$sistema = Sistema::All();
		return view('sistema.index',compact('sistema')); 
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sistema/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sistema
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /sistema/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		return "hola";
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sistema/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		
		
		$directorio =Directorio::where('sistema_id','=',$id)
			->orderBy('padre')
			->get();
		//$directorio = DB::select('select * from directorio where id ='.$id);

		return view('sistema.edit',['directorio'=>$directorio]);
		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sistema/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sistema/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}