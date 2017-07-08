<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Session;
use Redirect;
use Auth;


class LogController extends Controller {
  
	/**
	 * Display a listing of the resource.
	 * GET /log
	 *
	 * @return Response
	 */
	 
	 
	public function index()
	{
		//
		return "hola";
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /log/create
	 *
	 * @return Response
	 */

	public function logout(){
		Auth::logout();
		return Redirect::to('/');

	}
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /log
	 *
	 * @return Response
	 */
	public function store(LoginRequest $REQUEST)
	{
		//
		if(Auth::attempt(['email'=>$REQUEST['email'],'password'=>$REQUEST['pass']])){
			return Redirect::to('usuario');

		}else{
			Session::flash('message-error','Datos son incorrecto');
			return Redirect::to('/');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /log/{id}
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
	 * GET /log/{id}/edit
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
	 * PUT /log/{id}
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
	 * DELETE /log/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}