@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      @include('partials.menu')
      <div class="col-md-8">
          <div class="card">
          <div class="card-header">{{ isset($categoria) ? 'Editar Categoría' : 'Agregar Categoría'}}</div>
              <div class="card-body">
                @include('partials.errors')
                  <form action="{{ isset($categoria) ? route('categorias.update', $categoria->id) : route('categorias.store') }}" method="POST">
                  @csrf
                  @if(isset($categoria))
                    @method('PUT')
                  @endif
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{ isset($categoria) ? $categoria->nombre : '' }}" />
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-success">
                        {{isset($categoria) ? 'Actualizar' : 'Agregar'}}
                      </button>
                    </div>
                  </form>

              </div>
          </div>
      </div>
  </div>
</div>

@endsection





