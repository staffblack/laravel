<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class T_notas extends Model
{
     // Nombre de la tabla de la base de datos que definimos (Database table name).
  protected $table='notas';

  /**
    Por defecto Eloquent  asume que existe una clave primaria llamada id,
    si este no es nuesto caso lo tenemos que indicar en la variable $primaryKey
  */
  protected $primaryKey = 'id';

  // Denimos los campos de la tabla directamente en la variable de tipo array $fillable
  protected $fillable =  array('id_nivel','id_materia','cedula_docente','cedula_estudiante','nota1','nota2','nota3','nota4','nota5','nota6','dhi','proyectoescolar','informe' );

  /**
    En la variable $hidden podemos indicar los campos que no queremos que nos devuelvan
    en las consultas, por ejemplo, los campos created_at y updated_at, que el ORM Eloquent
    a�ade por defecto
    */
	
	protected $hidden = ['created_at','updated_at'];
}
