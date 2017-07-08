<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Roll extends Model {

	protected $table = 'roll';
	protected $primaryKey = 'COD';
	
	protected $fillable = ['NOMBRE'];
 	public $timestamps = false;


}
