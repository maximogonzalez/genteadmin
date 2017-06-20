<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Auditory;
use Illuminate\Support\Facades\Redirect;

class AuditoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('auditory.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('auditory.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        /*$this->validate($request, [

            'accion' => 'required|string|max:20',

        ]);
        */
        
     
       
        $auditory = Auditory::create([
          
          'accion' => $request->accion,
          'modelo' => $request->modelo,
          'id_modelo' => $request->id_modelo,
          'valor_anterior' => $request->valor_anterior,
          'valor_nuevo' => $request->valor_nuevo,
          'ip' => $request->ip,
          'nombre_maquina' => $request->nombre_maquina,
          'realizado_por_usuario' => $request->realizado_por_usuario
          
          ]);

        $auditory->save();

        //return Redirect::route('auditory.index');
        return;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
      $auditory = Auditory::findOrFail($id);
      $row = DB::table('users')->select('username')
             ->where('id','=',$auditory->realizado_por_usuario)
             ->first();
           
      return view('auditory.show', compact('auditory'))->with('row', $row);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $auditory = Auditory::findOrFail($id);

        return view('auditory.edit', compact('auditory'));

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

            'accion' => 'required|string|max:20,accion,' .$id

        ]);

        $auditory = Auditory::findOrFail($id);

        $auditory->update(['accion' => $request->accion]);


        return Redirect::route('auditory.show', ['auditory' => $auditory]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Auditory::destroy($id);

        return Redirect::route('auditory.index');

    }
}