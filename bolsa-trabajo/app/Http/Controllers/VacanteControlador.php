<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearVacanteRequest;
use App\Vacante;
use App\Categoria;
use Illuminate\Http\Request;

class VacanteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vacantes.index')->with('vacantes', Vacante::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //---Trae las categorías relacionadas
        return view('vacantes.crear')->with('categorias', Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearVacanteRequest $request)
    {

        //dd($request->all());
        //
        $vacante = Vacante::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'categoria_id' => $request->categoria_id,
            'salario' => $request->salario,
            'status_id' => 1,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            //'comentarios' => $request->comentarios
        ]);

        session()->flash('success', 'Vacante creada con éxito!');

        return redirect(route('vacantes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        //
        return view('vacantes.detalle')->with('vacante', $vacante);
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
