@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menú</div>
                    <div class="card-body">

               </div>
            </div>
        </div>

        <div class="col-md-8">
            <a href="{{ route('vacantes.create') }}" class="btn btn-md btn-success mb-2">Nueva Vacante</a>
            <div class="card">
                <div class="card-header">Dashboard</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="mb-5 text-center">Listado de vacantes</h2>
                    <table class="table">
                        <thead>
                            <th>Nombre de vacante</th>
                            <th>Status</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hola</td>
                                <td>Pendiente</td>
                                <td>
                                <a href="{{ route('vacantes.index') }}" class="btn btn-md btn-info" style="color:white">Ver</a>
                                <a href="" class="btn btn-md btn-danger">Eliminar</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
