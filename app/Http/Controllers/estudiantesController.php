<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\T_estudiante; 
use Illuminate\Support\Facades\storage;

class estudiantesController extends Controller
{
  /*public function index()
  {
     $lista_niveles = \DB::table('nivel')
			->select('*')
			->get();
			
			
	 return view('registrar_horarios')->with('niveles',$lista_niveles);
  }*/
  public function index()
    {
        $estudiantes=T_estudiante::orderBy('id','DESC')->paginate(5);
        return view('estudiantes.index',compact('estudiantes')); 
       
    }

    /**
     * Show the form for creating a new estudiante.
     *
     * @return Response
     */
    public function create()
    {
        return view('estudiantes.create');
        
    }

    /**
     * Store a newly created estudiante in storage.
     *
     * @param CreateestudianteRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //$datosEstudiantes = $request->all();

        $datosEstudiantes=request()->except('_token');//excluye el token de request
        
         $file = $request->file('foto');
        if($request->hasFile('foto')){
            
            $datosEstudiantes['foto']=$file->openFile()->fread($file->getSize());

        }
        
        T_estudiante::insert($datosEstudiantes);//inserta la informacion
        return redirect()->route('estudiantes.index')->with('success','Registro creado satisfactoriamente');

    }

    /**
     * Display the specified estudiante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show()
    {
        $estudiantes=T_estudiante::find($id);
        return  view('estudiantes.show',compact('estudiantes'));
    }

    /**
     * Show the form for editing the specified estudiante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
         $estudiantes=T_estudiante::find($id);
         //var_dump($estudiantes);
         //die();
        return view('estudiantes.edit',compact('estudiantes'));
        
    }

    /**
     * Update the specified estudiante in storage.
     *
     * @param int $id
     * @param UpdateestudianteRequest $request
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $datosEstudiantes=request()->except(['_token','_method']);

        if($request->hasFile('foto')){

            $datosEstudiantes['foto']=$request->file('foto')->store('uploads','public');
        }

        T_estudiante::where('id','=',$id)->update($datosEstudiantes);
        $estudiantes=T_estudiante::findOrFail($id);
        return view('estudiantes.edit',compact('estudiantes'));
    }

    /**
     * Remove the specified estudiante from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        
        T_estudiante::destroy($id);
        return redirect('estudiantes');
    }
 
}
