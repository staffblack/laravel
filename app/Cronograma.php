<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cronograma';

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
    protected $fillable = ['id', 'fecha', 'hora', 'tipo', 'nombre', 'descripcion', 'responsable', 'foto'];

    
}
