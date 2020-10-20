@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
    </div>
  <div class="row justify-content-center">
      @include('partials.menu')
      <div class="col-md-8">
          <div class="card">

              <div class="card-header">Información detallada </div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <div class="m-3">
                    <h2>{{ $vacante->titulo }}</h2>
                    <hr/>
                    <p><strong>Area: </strong>{!! $vacante->categoria->nombre !!}</p>
                    <p><strong>Descripción:</strong>{!! $vacante->descripcion !!}</p>

                    <p><strong>Salario: </strong>${!! $vacante->salario !!}</p>
                    <p><strong>Finaliza en:</strong> {!! $vacante->fecha_fin !!}</p>
                  </div>

                    <a class="btn btn-lg btn-warning" href="{{ route('vacantes.index') }}"><p style="font-size:18px;">Regresar a listado de empleos</p></a>


              </div>
          </div>
      </div>
  </div>
</div>

@endsection
