@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
    <a href="{{ route('vacantes.create') }}" class="btn btn-success float-right">Nueva Vacante</a>
    </div>
  <div class="row justify-content-center">
      @include('partials.menu')
      <div class="col-md-8">
          <div class="card">

              <div class="card-header">Vacantes Disponibles</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <table class="table">
                      <tbody>
                          <th>
                              Título
                          </th>
                          <th>
                              Categoría
                          </th>
                          <th>
                              Salario
                          </th>
                          <th>
                              Acciones
                          </th>
                          @foreach($vacantes as $vacante)
                          <tr>
                            <td>{{ $vacante->titulo }}</td>
                            <td>{{ $vacante->categoria->nombre }}</td>
                            <td>${{ $vacante->salario }}</td>
                            <td>
                                <a href="{{ route('vacantes.show', $vacante->id) }}" class="btn btn-md btn-info" style="color:white">Ver</a>
                                <button type="submit" class="btn btn-md btn-danger">Eliminar</button>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
