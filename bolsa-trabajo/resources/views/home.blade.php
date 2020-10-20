@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('partials.menu')

        <div class="col-md-8">
            <div class="card">
                <div class="body m-4">
                    <h2 class="text-center">Bienvenido a nuestra bolsa de trabajo!</h2>
                    <p>Aquí puedes checar las ofertas que tenemos disponibles.
                        Casi no entramos a este sitio pero tu ten fé de que veremos tu CV
                        en caso de que nos interese (si es que entramos aquí como ya dijimos).
                    </p>
                    <p>Ofrecemos pagas bajas, horarios en los que no tengas vida y ofertas
                        prestaciones de ley que serán irresistibles para tí.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Veamos que hay...</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="mb-5 text-center">Vacantes Destacadas</h2>
                    <table class="table">
                        <thead>
                            <th>Nombre de vacante</th>
                            <th>Salario</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($vacantes as $vacante)
                            <tr>
                                <td>
                                    {{ $vacante->titulo }}
                                </td>
                                <td>
                                    ${{ $vacante->salario }} MXN
                                </td>
                                <td>
                                    <a href="{{ route('vacantes.index') }}" class="btn btn-md btn-info" style="color:white">Ver</a>
                                </td>
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
