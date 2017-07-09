<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    //
    
    protected $table = 'publicidads';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

 
    protected $fillable = ['nombre', 
                        'eslogan', 
                        'mision', 
                        'vision', 
                        'aboutme', 
                        'video'
                        ];


}
