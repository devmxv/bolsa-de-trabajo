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
      <div class="col-md-8"></div>
          <div class="card">
              <div class="card-header">Detalle de vacante</div>

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
                              Descripción
                          </th>
                          <th>
                              Acciones
                          </th>
                          @foreach($vacantes as $vacante)
                          <tr>
                            <td>{{ $vacante->titulo }}</td>
                            <td>${{ $vacante->salario }}</td>
                          </tr>
                          <tr>
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
