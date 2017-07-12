<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model {

	protected $table = 'sistema';
	protected $primaryKey = 'id';
	
	protected $fillable = ['nombre'];
 	public $timestamps = false;


}
