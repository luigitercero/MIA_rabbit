<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Genero;
use App\Roll;
use Session;
use Redirect;
use App\User;
use App\Http\Requests\UsuarioUpdateRequest;
class PerfilController extends Controller {
/**
	 * Display a listing of the resource.
	 * GET /usuario
	 *
	 * @return Response
	 */

 public function __construct()
    {
        $this->middleware('auth');
	
    }


public function perfil($id)
	{
		if ($id == \Auth::user()->id){
		$genero = Genero::All();
		$roll = Roll::All();
		$usuario =user::find($id);		
		return view('usuario.perfil',['usuario'=>$usuario],compact('genero','roll'));
	}else{

			return Redirect::to('/home');
		}	
	}	

	public function index()
	{
		//
		
		return Redirect::to('/home');
	}
	public function prueba()
	{
		//

		return "esto es una prueba";
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
	public function store(UsuarioCreateRequest $request)
	{
		//;
		
		$usuario = new User;
		$usuario ->name= $request->name;
		$usuario ->email=$request->email;
		$usuario ->password=$request->password;
		$usuario->telefono =$request->telefono;
		//$usuario->FREGISTRO=$request->fregistro;
		$usuario->direccion=$request->direccion;
		$usuario->nacimiento = $request->nacimiento;
		$usuario->Roll_cod =$request->roll_cod;
		$usuario->genero_cod = $request->genero_cod;
	
		$usuario->save();
		Session::flash('message',"se creo un nuevo usuario: '".$usuario->name."' exitosamente");
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
		return Redirect::to('/home');
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
	
		if ($id == \Auth::user()->id){
		$genero = Genero::All();
		$roll = Roll::All();
		$usuario =user::find($id);		
		return view('usuario.perfil',['usuario'=>$usuario],compact('genero','roll'));
	}else{

			return Redirect::to('/home');
		}	

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /usuario/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update($id, UsuarioUpdateRequest $request)
	{
		//
		$usuario = User::find($id);
		$usuario ->name= $request->name;
		$usuario ->email=$request->email;
		$usuario ->password=$request->password;
		$usuario->telefono =$request->telefono;
		//$usuario->FREGISTRO=$request->fregistro;
		$usuario->direccion=$request->direccion;
		$usuario->nacimiento = $request->nacimiento;
		$usuario->Roll_cod =$request->roll_cod;
		$usuario->genero_cod = $request->genero_cod;
		$usuario -> save();
		
		Session::flash('message',"se edito el usuario: '"."' exitosamente");
		return Redirect::to('/home');
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
		
		return Redirect::to('/home');
	}


}