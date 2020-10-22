@extends('layouts.app')


@section('content')
<div class="container">
    <div class="d-flex justify-content-end mb-2">
    <a href="{{ route('usuarios.create') }}" class="btn btn-success float-right">Nueva Categoría</a>
    </div>
  <div class="row justify-content-center">
      @include('partials.menu')
      <div class="col-md-8">
          <div class="card">

              <div class="card-header">Lista de Usuarios</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                @if($usuarios->count() > 0)
                  <table class="table">
                      <tbody>
                          <th>
                              Perfil
                          </th>
                          <th>
                              Nombre
                          </th>
                          <th>
                              Correo electrónico
                          </th>
                          <th>
                              Acciones
                          </th>
                          @foreach($usuarios as $usuario)
                          <tr>
                            <td>{{ Str::upper($usuario->rol) }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-md btn-info" style="color:white">Editar</a>
                                <button class="btn btn-md btn-danger" onclick="accionEliminar({{ $usuario->id }})">Eliminar</button>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  @else
                    <h5 class="text-center text-secondary m-3">No hay usuarios registrados pero es poco probable que veas este mensaje...o no?</h5>
                  @endif

                  <!--Modal de eliminación de registro-->
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
                  <!-- // Fin modal de eliminación de registro -->
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
        form.action = '/usuarios/' + id;

        $('#modalEliminar').modal('show');
    }
</script>
@endsection
