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
                @if($vacantes->count() > 0)
                  <table class="table">
                      <tbody>
                          <th>
                              Título
                          </th>
                          <th>
                              Área
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
                                <a href="{{ route('vacantes.edit', $vacante->id) }}" class="btn btn-md btn-warning">Editar</a>
                                <button type="submit" class="btn btn-md btn-danger" onclick="eliminar({{ $vacante->id }})">Eliminar</button>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                @else

                  <h4 class="text-center text-secondary m-3">No hay vacantes disponibles por lo que tendrás que buscar en otro lado D:</h4>
                @endif
                  <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action="" method="POST" id="eliminarVacForm">
                    @method('DELETE')
                    @csrf
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deleteModalLabel">Eliminar Vacante</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="text-center text-bold">Seguro quieres eliminar esta vacante? ¿Te cansaste de esperar al candidato rockstar?</p>
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
        function eliminar(id){
            var form = document.getElementById('eliminarVacForm');
            form.action = '/vacantes/' + id;

            $('#modalEliminar').modal('show');
        }
    </script>


@endsection
