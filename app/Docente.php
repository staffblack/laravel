<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'docente';

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
    protected $fillable = ['id','cedula', 'grado', 'nombres', 'apellidos', 'email', 'telefono', 'cargo', 'area', 'password', 'foto', 'grado'];

    
}
