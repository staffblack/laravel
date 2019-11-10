<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Horarion;
use Illuminate\Http\Request;

class HorarionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $horarion = Horarion::where('id', 'LIKE', "%$keyword%")
                ->orWhere('cedula_docente', 'LIKE', "%$keyword%")
                ->orWhere('id_nivel', 'LIKE', "%$keyword%")
                ->orWhere('id_materia', 'LIKE', "%$keyword%")
                ->orWhere('id_dia', 'LIKE', "%$keyword%")
                ->orWhere('id_hora', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $horarion = Horarion::latest()->paginate($perPage);
        }

        return view('horarion.index', compact('horarion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('horarion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Horarion::create($requestData);

        return redirect('horarion')->with('flash_message', 'Horarion added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $horarion = Horarion::findOrFail($id);

        return view('horarion.show', compact('horarion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $horarion = Horarion::findOrFail($id);

        return view('horarion.edit', compact('horarion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $id_nivel = $request->id_nivel;
        include '../conexion3.php';
        $registros = mysqli_query($conexion, "select * from nivel where id= '$id_nivel'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) 
  {
  $modalidad=$reg['modalidad']; 
  $oferta=$reg['oferta'];
  }
        
        $req='registrar_horarios?id_nivel='.$id_nivel.'&modalidad_nivel='.$modalidad.'&descripcion_nivel='.$oferta.'&si=0';
        $horarion = Horarion::findOrFail($id);
        $horarion->update($requestData);
        $mensaje='registrado';
        return redirect($req)->with('mensaje',$mensaje);
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
       
       
        include '../conexion3.php';
            $registros = mysqli_query($conexion, "select *  from horario AS ho INNER JOIN nivel AS ni ON ho.id_nivel=ni.id where ho.id= '$id'") or
        die("Problemas en el select:" . mysqli_error($conexion));

      while ($reg = mysqli_fetch_array($registros)) 
      {
      $modalidad=$reg['modalidad']; 
      $oferta=$reg['oferta'];
      $id_nivel=$reg['id'];
       $req='registrar_horarios?id_nivel='.$_REQUEST['id_nivel'].'&modalidad_nivel='.$modalidad.'&descripcion_nivel='.$oferta;
       
      }
         Horarion::destroy($id);
        return redirect($req)->with('flash_message', 'Horarion deleted!');
    }
}
