<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarCategoriaRequest;
use App\Http\Requests\CrearStatusVacanteRequest;
use App\StatusVacante;
use Illuminate\Http\Request;

class StatusVacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('status.index')->with('status', StatusVacante::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearStatusVacanteRequest $request)
    {
        //
        $status = StatusVacante::create([
            'nombre' => $request->nombre
        ]);

        session()->flash('success', 'Status de vacante creado correctamente!');

        return redirect(route('status.index'));
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
    public function edit(StatusVacante $status)
    {
        //
        return view('status.create')->with('status', $status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarCategoriaRequest $request, StatusVacante $status)
    {
        //
        $status->update([
            'nombre' => $request->nombre
        ]);

        $status->save();

        session()->flash('success', 'Estado de vacante actualizado correctamente!');

        return redirect(route('status.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusVacante $status)
    {
        //
        $status->delete();

        session()->flash('success', 'Estado de vacante eliminado correctamente!');
        return redirect(route('status.index'));
    }
}
