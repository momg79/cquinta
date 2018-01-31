<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;


class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = Jugador::latest()->paginate(5);
        return view('jugadores.index',compact('jugadores'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jugadores.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'rut'                   => 'required',
            'nombre'                => 'required',
            'apellido_materno'      => 'required',
            'apellido_paterno'      => 'required',
            'fecha_nacimiento'      => 'required',
            'fecha_ingreso'         => 'required',
            'categoria'             => 'required',
            'telefono1'             => 'required',
            'telefono2'             => 'required',
            'correo'                => 'required',
            'direccion'             => 'required',
            'apoderado'             => 'required',
            'telefonoapoderado'     => 'required',
            'correoapoderado'       => 'required',
            'estado_alumno'         => 'required',
        ]);
        Categoria::create($request->all());
        return redirect()->route('jugadores.index')
                        ->with('success','Jugador Creado');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $jugador = Categoria::find($Id);
        return view('jugadores.show',compact('jugador'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador = Categoria::find($id);
        return view('jugador.edit',compact('jugador'));
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
        request()->validate([
            'rut'                   => 'required',
            'nombre'                => 'required',
            'apellido_materno'      => 'required',
            'apellido_paterno'      => 'required',
            'fecha_nacimiento'      => 'required',
            'fecha_ingreso'         => 'required',
            'categoria'             => 'required',
            'telefono1'             => 'required',
            'telefono2'             => 'required',
            'correo'                => 'required',
            'direccion'             => 'required',
            'apoderado'             => 'required',
            'telefonoapoderado'     => 'required',
            'correoapoderado'       => 'required',
            'estado_alumno'         => 'required',
        ]);
        Jugador::find($id)->update($request->all());
        return redirect()->route('jugadores.index')
                        ->with('success','Jugador actualizado con éxito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jugador::find($id)->delete();
        return redirect()->route('jugadores.index')
                        ->with('success','Jugador eliminado con éxito');
    }
}
