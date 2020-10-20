@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
    <a href="{{ route('categorias.create') }}" class="btn btn-success float-right">Nueva Categoría</a>
    </div>
  <div class="row justify-content-center">
      @include('partials.menu')
      <div class="col-md-8">
          <div class="card">

              <div class="card-header">Categorías</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <table class="table">
                      <tbody>
                          <th>
                              Nombre
                          </th>
                          <th>
                              Acciones
                          </th>
                          @foreach($categorias as $categoria)
                          <tr>
                            <td>{{ $categoria->nombre }}</td>
                            <td>
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-md btn-info" style="color:white">Editar</a>
                                <button class="btn btn-md btn-danger" onclick="accionEliminar({{ $categoria->id }})">Eliminar</button>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action="" method="POST" id="eliminarCatForm">
                    @method('DELETE')
                    @csrf
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deleteModalLabel">Eliminar Categoría</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="text-center text-bold">Seguro quieres eliminar esta categoría? ¿Ya consultaste a tu jefe antes de hacer esto?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No, mejor pregunto primero</button>
                          <button type="submit" class="btn btn-danger">Si, ALV!</button>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
    function accionEliminar(id){
        var form = document.getElementById('eliminarCatForm');
        form.action = '/categorias/' + id;

        $('#modalEliminar').modal('show');
    }
</script>
@endsection
