<?php

Route::resource('index', 'T_eventoController');
Route::resource('mi', 'HorarioController');
Route::resource('noticia', 'T_noticiasController');
Route::resource('evento', 'T_eventosController');
Route::resource('evento_view', 'A_eventosController');
Route::get('eventos_view', 'T_eventoController@index2');
Route::get('notas_bloque2', 'HorarioController@index2');


Route::get('updateestudiante', 'T_nuestro_colegioController@updateestudiante');

Route::resource('nuestro_colegio', 'T_nuestro_colegioController');
Route::get('resena_historica', 'T_nuestro_colegioController@resena_historica');
Route::get('quienes_somos', 'T_nuestro_colegioController@quienes_somos');
Route::get('estudiantes/edit', 'estudiantesController@edit');


Route::resource('oferta_academica', 'T_oferta_academicaController');
Route::get('seccion_matutina', 'T_oferta_academicaController@seccion_matutina');
Route::get('seccion_vespertina', 'T_oferta_academicaController@seccion_vespertina');


Route::resource('comunidad_educativa', 'T_comunidad_educativaController');


Route::resource('resultado', 'T_resultadoController');

Route::resource('nivel', 'T_nivelController'); 
Route::resource('dia', 'T_dia_docente_materiaController');
Route::get('plantilla', function () {
    return view('plantilla');
});


///////////////////notas bloque/////////////////////////
Route::resource('notas_bloque', 'T_notas_bloqueController');
Route::post('notas_bloque', 'T_notas_bloqueController@show');



Route::name('print')->get('/imprimir', 'T_ejemploController@imprimir');





Route::post('dia', 'T_dia_docente_materiaController@store');


Route::get('comunidad_educativa_docentes', 'T_comunidad_educativaController@comunidad_educativa_docentes');

Route::get('formularios1', 'T_formularioController@formularios1');
//////////////////formulario////////////////////
Route::resource('formularios', 'T_formularioController');
Route::post('formulario', 'T_formularioController@store'); 
Route::get('modificar_formulario', 'T_formularioController@modificar_formulario'); 
Route::get('descargar_formulario', 'T_formularioController@descargar_formulario'); 

///////////////////cronograma/////////////////////////

Route::resource('cronograma', 'T_cronogramaController');
Route::post('cronograma', 'T_cronogramaController@store');
Route::get('modificar_cronograma', 'T_cronogramaController@modificar_cronograma');



Route::resource('cronograma1', 'T_cronograma1Controller');
Route::get('mostrar_actividades_dia', 'T_cronograma1Controller@mostrar_actividades_dia');

//////////////////////////estudiante/////////////////////////

Route::resource('estudiantes', 'T_estudianteController'); 
Route::post('estudiantes', 'T_estudianteController@store'); 
Route::get('modificar_estudiante','T_estudianteController@modificar_estudiante');
////////////////////////////////////////////////////////7


Route::resource('nota_estudiante', 'T_nota_estudianteController'); 
Route::get('materia_docentes','T_nota_estudianteController@materia_docentes');
Route::get('estudiante_docentes','T_nota_estudianteController@estudiante_docentes');
Route::get('editar_bloque','T_nota_estudianteController@editar_bloque');

Route::get('mostrar_bloques','T_nota_estudianteController@mostrar_bloques');
Route::get('mostrar_bloque','T_nota_estudianteController@mostrar_bloque');
Route::post('ingresar_bloque','T_nota_estudianteController@store');
Route::get('imprimir_notas','T_nota_estudianteController@imprimir_notas');


Route::resource('horario_docente','T_horario_docenteController');
Route::get('mostrar_horario_docente','T_horario_docenteController@mostrar_horario_docente');



////////////////////////////////////docentes///////////////////////

Route::resource('docentes','T_docenteController');
Route::post('docentes', 'T_docenteController@store'); 
Route::get('modificar_docente','T_docenteController@modificar_docente');
/////////////////////////////////////////////////////7

//////////////////////////////////////////////////usuarios//////////////////////

Route::resource('usuarios','T_usuarioController');
Route::post('usuarios','T_usuarioController@store');
Route::get('modificar_usuario','T_usuarioController@modificar_usuario');


//////////////////////////////////////////////////////////////////////////////

/////////////////////////nivel estudiante/////////////////////////////
Route::resource('nivel_estudiantes','NivelController');
Route::get('asignar_estudiantes','T_nivel_estudianteController@asignar_estudiantes');
Route::post('nivel_estudiantes','T_nivel_estudianteController@store');

//////////////////// horarios ///////////////////////////////////
//Route::resource('horarios','T_horarioController');
Route::resource('horarios', 'HorarioController');
Route::get('registrar_horarios','T_horarioController@registrar_horarios');
Route::post('horarios','T_horarioController@store');
Route::get('borrah','T_horarioController@borrah');
Route::get('mostrar_horario_nivel','T_horarioController@mostrar_horario_nivel');

Route::get('mostrar_horario_docente1','T_horario_docenteController@mostrar_horario_docente1');

////////////////////////////nuevos archivos
Route::resource('estudiantes','estudiantesController' );
Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/docente', 'Admin\DocenteController');
Route::resource('admin/usuario', 'Admin\\UsuarioController');
Route::resource('docente', 'DocenteController');
Route::resource('usuario', 'UsuarioController');
Route::resource('estudiante', 'EstudianteController');
Route::resource('usuario', 'UsuarioController');
Route::resource('usuario', 'UsuarioController');
Route::resource('formulario', 'FormularioController');
Route::resource('cronograma', 'CronogramaController');
Route::resource('area', 'AreaController');
Route::resource('eventos', 'EventoController');
Route::resource('horario', 'HorarioController');
Route::resource('estudiante-notas', 'EstudianteNotasController');
Route::resource('perfil-estudiante', 'PerfilEstudianteController');
Route::resource('cronograma-secretaria', 'CronogramaSecretariaController');
Route::resource('nivel', 'NivelController');
Route::resource('horarion', 'HorarionController');
Route::resource('perfil-secretaria', 'PerfilSecretariaController');
Route::resource('pr1', 'pr1Controller');
Route::resource('docenteperfil', 'docenteperfilController');
Route::resource('docenteperfil', 'docenteperfilController');