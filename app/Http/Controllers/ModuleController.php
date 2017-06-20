<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sede;
use Illuminate\Support\Facades\Redirect;


class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('sede.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('sede.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

      $this->validate($request, [

      'nombre_sede' => 'required|unique:sedes|string|max:50',
      'descripcion_sede' => 'nullable|string',
      'ubicacion_sede' => 'nullable|string',
      'estatus_sede' => 'required|boolean',   

      ]);

      $sede = Sede::create([
                              
      'nombre_sede' => $request->nombre_sede,
      'descripcion_sede' => $request->descripcion_sede,
      'ubicacion_sede' => $request->ubicacion_sede,
      'estatus_sede' => $request->estatus_sede,  
        
      ]);

        if($sede->save())
        {
          $message= "El registro ha sido guardado  en la base de datos."; 
          return Redirect::route('sede.index')->with(['success' => $message]);
        }
        else
        {
          $message= "El registro no ha podido ser guardado en la base de datos."; 
          return Redirect::route('sede.index')->with(['error' => $message]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $sede = Sede::findOrFail($id);

        return view('sede.show', compact('sede'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $sede = Sede::findOrFail($id);

        return view('sede.edit', compact('sede'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [

      'nombre_sede' => 'required|string|max:50|unique:sedes,nombre_sede,' .$id,
      'descripcion_sede' => 'nullable|string',
      'ubicacion_sede' => 'nullable|string',
      'estatus_sede' => 'required|boolean',   

        ]);

      $sede = Sede::findOrFail($id);

      if($sede->update([

      'nombre_sede' => $request->nombre_sede,
      'descripcion_sede' => $request->descripcion_sede,
      'ubicacion_sede' => $request->ubicacion_sede,
      'estatus_sede' => $request->estatus_sede, 
          
      ]))        
      {
        $message= "La modificación del registro ha sido guardada en la base de datos."; 
        return Redirect::route('sede.index')->with(['success' => $message]);
      }
      else
      {
        $message= "La modificación del registro no ha podido ser guardada en la base de datos."; 
        return Redirect::route('sede.index')->with(['error' => $message]);
      }          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
      //if(Sede::find($id)->relation)
      //{
        if(Sede::destroy($id))
        {
          $message= "El registro ha sido eliminado de la base de datos."; 
          return Redirect::route('sede.index')->with(['success' => $message]);
        }
        else
        {
          $message= "El registro no ha podido ser eliminado de la base de datos."; 
          return Redirect::route('sede.index')->with(['error' => $message]);
        }
      //}
      //else
      //{
      //  $message= "El registro no puede eliminarse porque otros registros dependen de él."; 
      //  return Redirect::route('sede.index')->with(['error' => $message]);
      //}          
    }
}