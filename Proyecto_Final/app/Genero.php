<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

	protected $table = 'genero';
	protected $primaryKey = 'COD';
	
	protected $fillable = ['NOMBRE'];
 	public $timestamps = false;
	
	
	public function prueba($id,$nombre){

		
	}

}
