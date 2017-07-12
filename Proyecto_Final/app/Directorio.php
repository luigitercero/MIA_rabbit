<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Directorio extends Model {
	protected $table = 'directorio';
	protected $primaryKey = 'id';
	
	protected $fillable = [
		'id',            
'nombre',        
'permiso',       
'padre',         
'tipo_cod',      
'contenido_cod', 
'inodo',         
'sistema_id',  
'propietario'
	];
 	public $timestamps = false;


}
