<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Genero;
class GeneroController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /genero
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('genero.index');
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
	
	\App\Genero::create([
		'NOMBRE'=>$request['name']
		]);
		return 'akistoy';
		
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
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /genero/{id}
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
	 * DELETE /genero/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}