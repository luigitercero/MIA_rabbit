<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Publicidad;
class InicioController extends Controller {

 
    public function __construct()
    {
        $this->middleware('guest');
    }
	/**
	 * Display a listing of the resource.
	 * GET /inicio
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$publicidad =Publicidad::find(1);
		return view('master',['publicidad'=>$publicidad]);
		 
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /inicio/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /inicio
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /inicio/{id}
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
	 * GET /inicio/{id}/edit
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
	 * PUT /inicio/{id}
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
	 * DELETE /inicio/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}