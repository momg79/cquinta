<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::latest()->paginate(5);
        return view('categorias.index',compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
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
            'categoria' => 'required',
            'edad_minima' => 'required',
            'edad_maxima' => 'required',
        ]);
        Categoria::create($request->all());
        return redirect()->route('categorias.index')
                        ->with('success','Categoria Creada');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $IdCategoria
     * @return \Illuminate\Http\Response
     */
    public function show($IdCategoria)
    {
        $categoria = Categoria::find($IdCategoria);
        return view('categorias.show',compact('categoria'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit',compact('categoria'));
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
            'categoria' => 'required',
            'edad_minima' => 'required',
            'edad_maxima' => 'required',
        ]);
        Categoria::find($id)->update($request->all());
        return redirect()->route('categorias.index')
                        ->with('success','Categoria actualizada con éxito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::find($id)->delete();
        return redirect()->route('categorias.index')
                        ->with('success','Categoria eliminada con éxito');
    }
}
