<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horarion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'horario';

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
    protected $fillable = ['id', 'cedula_docente', 'id_nivel', 'id_materia', 'id_dia', 'id_hora'];

    
}
