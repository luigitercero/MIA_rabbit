<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Roll;
use Session;
use Redirect;

class RollController extends Controller {

	 public function __construct()
    {
        $this->middleware('auth');
		 $this->middleware('admin');
    }


	/**
	 * Display a listing of the resource.
	 * GET /roll
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$roll = Roll::All();
		return view('roll.index',compact('roll'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /roll/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return view('roll.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /roll
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$roll = new Roll;
		$roll->nombre = $request->nombre;
		$roll->save();
		/*
	\App\Roll::create([
		'NOMBRE'=>$request['name']
		]);
		*/
		Session::flash('message',"se creo un nuevo roll: '".$roll->cod."' exitosamente");
		return Redirect::to('/roll');
		
	}

	/**
	 * Display the specified resource.
	 * GET /roll/{id}
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
	 * GET /roll/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$roll =Roll::find($id);
		return view('roll.edit',['roll'=>$roll]);

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /roll/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//
		Roll::where('cod',$id)->update(['nombre'=>$request->nombre]);
		$roll =Roll::find($id);
		Session::flash('message',"se edito el roll: '".$roll->cod."' exitosamente");
		return Redirect::to('/roll');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /roll/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		Roll::where('cod',$id)->delete($id);
		
		Session::flash('message',"se elimino el roll: '".$id."' exitosamente");
		return Redirect::to('/roll');
	}

}