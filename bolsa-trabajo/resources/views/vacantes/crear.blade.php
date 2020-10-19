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
          <div class="card">
              <div class="card-header">Detalle de vacante</div>

              <div class="card-body">
                @include('partials.errors')
                  <form action="{{ route('vacantes.store') }}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="titulo">Título</label>
                      <input type="text" class="form-control" name="titulo" value="" />
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripción</label>
                      <input id="descripcion" type="hidden" name="descripcion">
                      <trix-editor input="descripcion"></trix-editor>
                    </div>
                    <div class="form-group">
                      <label for="categoria">Categoría</label>
                      <input type="select" name="categoria_id" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="salario">Salario</label>
                      <input type="number" name="salario" min="1" max="999999" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="fecha_inicio">Fecha Inicio publicación</label>
                      <input type="text" class="form-control" name="fecha_inicio" id="fecha_inicio">
                    </div>
                    <div class="form-group">
                      <label for="fecha_fin">Fecha Final publicación</label>
                      <input type="text" class="form-control" name="fecha_fin" id="fecha_fin">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-success">Continuar</button>
                    </div>
                  </form>

              </div>
          </div>
      </div>
  </div>
</div>

@endsection


@section('css')

  <link ref="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />


@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <script>

    flatpickr('#fecha_inicio', {

      enableTime: false,
      enableSeconds: false

    });

    flatpickr('#fecha_fin', {

      enableTime: false,
      enableSeconds: false

    });
  </script>

@endsection


