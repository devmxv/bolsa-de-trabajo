@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      @include('partials.menu')
      <div class="col-md-8">
          <div class="card">
          <div class="card-header">{{ isset($status) ? 'Editar Status' : 'Agregar Status'}}</div>
              <div class="card-body">
                @include('partials.errors')
                  <form action="{{ isset($status) ? route('status.update', $status->id) : route('status.store') }}" method="POST">
                  @csrf
                  @if(isset($status))
                    @method('PUT')
                  @endif
                    <div class="form-group">
                      <label for="nombre">Status</label>
                    <input type="text" class="form-control" name="nombre" value="{{ isset($status) ? $status->nombre : '' }}" />
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-success">
                        {{isset($status) ? 'Actualizar' : 'Agregar'}}
                      </button>
                    </div>
                  </form>

              </div>
          </div>
      </div>
  </div>
</div>

@endsection





