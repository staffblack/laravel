<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilEstudiante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estudiante';

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
    protected $fillable = ['id', 'cedula', 'nombres', 'apellidos', 'password', 'foto','telefono_representante'];

    
}
