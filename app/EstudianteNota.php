<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudianteNota extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notas';

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
    protected $fillable = ['id', 'id_nivel', 'id_materia', 'cedula_docente', 'cedula_estudiante', 'id_bloque', 'nota', 'alcance'];

    
}
