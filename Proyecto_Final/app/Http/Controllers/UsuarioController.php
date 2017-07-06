<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Usuario;
use App\Genero;
use App\Roll;
use Session;
use Redirect;

class UsuarioController extends Controller {

/**
	 * Display a listing of the resource.
	 * GET /usuario
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$usuario = Usuario::All();
		return view('usuario.index',compact('usuario'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /usuario/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$genero = Genero::All();
		$roll = Roll::All();
		return view('usuario.create',compact('genero','roll'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /usuario
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$usuario = new Usuario;
		$usuario->nombre = $request->nombre;
		$usuario->PASS=$request->pass;
		$usuario->correo =$request->correo;
		$usuario->telefono =$request->telefono;
		$usuario->FREGISTRO=$request->fregistro;
		$usuario->direccion=$request->direccion;
		$usuario->nacimiento = $request->nacimiento;
		$usuario->Roll_cod =$request->roll_cod;
		$usuario->genero_cod = $request->genero_cod;
		$usuario->save();
		/*
	\App\Usuario::create([
		'NOMBRE'=>$request['name']
		]);
		*/
		Session::flash('message',"se creo un nuevo usuario: '".$usuario->nombre."' exitosamente");
		return Redirect::to('/usuario');
		
	}

	/**
	 * Display the specified resource.
	 * GET /usuario/{id}
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
	 * GET /usuario/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
			$genero = Genero::All();
		$roll = Roll::All();
		$usuario =Usuario::find($id);
		return view('usuario.edit',['usuario'=>$usuario],compact('genero','roll'));

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
		Usuario::where('id',$id)->update(['nombre'=>$request->nombre,
		'PASS' => $request->pass,
        'correo' => $request->correo,
        'telefono' => $request->telefono,
        'FREGISTRO' => $request->fregistro,
        'direccion' => $request->direccion,
        'nacimiento' => $request->nacimiento,
        'Roll_cod'  => $request->roll_cod,
        'genero_cod' => $request->genero_cod

		]);
		
		Session::flash('message',"se edito el usuario: '"."' exitosamente");
		return Redirect::to('/usuario');
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
		
		Usuario::where('id',$id)->delete($id);
		
		Session::flash('message',"se elimino el usuario: '".$id."' exitosamente");
		return Redirect::to('/usuario');
	}


}