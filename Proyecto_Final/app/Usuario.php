<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
	protected $table = 'Usuario';
	protected $fillable = ['NOMBRE','PASS','CORREO','TELEFONO','NACIMIENTO','FREGISTRO','DIRECCION','GENERO','ROLL_COD','GENERO_COD'];
 	public $timestamps = false;
}
