<div class="col-md-4">
  <div class="card">
      <div class="card-header">Menú</div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="list-group-item"><a href="{{ route('vacantes.index') }}">Vacantes</a></li>
          @if(auth()->user()->isAdmin())
            <li class="list-group-item"><a href="{{ route('categorias.index') }}">Categorías</a></li>
            <li class="list-group-item"><a href="{{ route('status.index') }}">Status</a></li>
        <li class="list-group-item"><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
          @endif
        </ul>
      </div>
</div>
</div>
