@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listado de Usuarios') }}</div>
                <div class="card-body">
                <table id="users-table">
                    <!-- Encabezados de la tabla -->
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <!-- Puedes agregar más columnas si es necesario -->
                        </tr>
                    </thead>
                    <!-- Cuerpo de la tabla -->
                    <tbody id="users-list">
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <!-- Agrega más columnas si es necesario -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <!-- Mostrar la paginación si está disponible -->
                @if(isset($users->links))
                    <div>
                        {!! $users->links !!}
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
