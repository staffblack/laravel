<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'formulario';

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
    protected $fillable = ['id', 'nombre', 'descripcion', 'documento','categoria','formato'];

    
}
