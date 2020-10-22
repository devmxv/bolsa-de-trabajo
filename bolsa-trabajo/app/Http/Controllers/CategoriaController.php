<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\ActualizarCategoriaRequest;
use App\Http\Requests\CrearCaterogiaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('categorias.index')->with('categorias', Categoria::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearCaterogiaRequest $request)
    {
        //
        $categoria = Categoria::create([
            'nombre' => $request->nombre
        ]);

        session()->flash('success', 'Categoría creada correctamente!');

        return redirect(route('categorias.index'));
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
    public function edit(Categoria $categoria)
    {
        //
        return view('categorias.crear')->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarCategoriaRequest $request, Categoria $categoria)
    {
        //
        $categoria->update([
            'nombre' => $request->nombre
        ]);

        $categoria->save();

        session()->flash('success', 'Categoría actualizada!');
        return redirect(route('categorias.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //---TODO: Checar que no haya vacantes con esta categoría
        if ($categoria->vacantes->count() > 0) {
            session()->flash('error', 'Esta categoría no puede eliminarse porque hay vacantes activas.');
            return redirect()->back();
        }

        $categoria->delete();

        session()->flash('success', 'Categoría eliminada y sabes que no regresará');
        return redirect(route('categorias.index'));
    }
}
