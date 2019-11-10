<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CronogramaSecretarium;
use Illuminate\Http\Request;

class CronogramaSecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $cronogramasecretaria = CronogramaSecretarium::where('id', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                ->orWhere('hora', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('responsable', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cronogramasecretaria = CronogramaSecretarium::latest()->paginate($perPage);
        }

        return view('cronograma-secretaria.index', compact('cronogramasecretaria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cronograma-secretaria.create');
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
        
        $datosCronograma=request()->except('_token');//excluye el token de request
        
        $file = $request->file('foto');
        if($request->hasFile('foto')){
            
            $datosCronograma['foto']=$file->openFile()->fread($file->getSize());

        }
        CronogramaSecretarium::create($datosCronograma);
        $redireccion='cronograma-secretaria?accion=creado';
        $mensaje='Creado Exitosamente';
        return redirect($redireccion)->with('mensaje', $mensaje);
       // return redirect('cronograma')->with('flash_message', 'Cronograma Agregado satisfactoriamente!');
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
        $cronogramasecretarium = CronogramaSecretarium::findOrFail($id);

        return view('cronograma-secretaria.show', compact('cronogramasecretarium'));
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
        $cronogramasecretarium = CronogramaSecretarium::findOrFail($id);

        return view('cronograma-secretaria.edit', compact('cronogramasecretarium'));
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
               
        $file = $request->file('foto');
        if($request->hasFile('foto')){
            
            $requestData['foto']=$file->openFile()->fread($file->getSize());
        /*
        
        $requestData = $request->all();
               
        if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        
*/
            }

        $cronograma = CronogramaSecretarium::findOrFail($id);
        $cronograma->update($requestData);

       
        $redireccion='cronograma-secretaria?accion=creado';
        return redirect($redireccion)->with('flash_message', 'Estudiante updated!');
        //return redirect('cronograma')->with('flash_message', 'Cronograma updated!');
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
        CronogramaSecretarium::destroy($id);

        return redirect('cronograma-secretaria')->with('flash_message', 'CronogramaSecretarium deleted!');
    }
}
