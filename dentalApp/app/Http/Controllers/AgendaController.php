<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('agendar\formulario');
    }

    public function citaCorrecta()
    {

        return view('agendar\create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //función para guardar la cita en la base de datos
    public function store(Request $request)
    {
        $cita=new Citas();
        $cita->nombre=$request->post('nombre');
        $cita->apellidos=$request->post('apellidos');
        $cita->documento=$request->post('documento');
        $cita->tipo_de_trabajo=$request->post('tipo_de_trabajo');
        $cita->fecha=$request->post('fecha');
        $cita->hora=$request->post('hora');
        $cita->save();

        return redirect()->route('agendar.creada')->with('success','Cita creada correctamente');
    }

    public function tableAll()
    {
        $cita = Citas::all();

        return view('agendar\tabla', compact('cita'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
