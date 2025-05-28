@extends('layouts.app')

@section('title', 'Lista de Computadores')

@section('content')
    <h2>Lista de Computadores</h2>
    <form action="{{ route('computadores.index') }}" method="GET">
        <input type="text" name="query" placeholder="Buscar por código de tienda o procesador..." value="{{ request('query') }}">
        <button type="submit">Buscar</button>
    </form>
    <a href="{{ route('computadores.create') }}" class="button">Crear Nuevo Computador</a>
    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif
    @if($computadores->isEmpty())
        <p>No hay computadores registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código de Tienda</th>
                    <th>Almacenamiento</th>
                    <th>RAM</th>
                    <th>Tarjeta Gráfica</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Procesador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($computadores as $computador)
                    <tr>
                        <td>{{ $computador->id }}</td>
                        <td>{{ $computador->codigo_tienda }}</td>
                        <td>{{ $computador->almacenamiento }}</td>
                        <td>{{ $computador->ram }}</td>
                        <td>{{ $computador->tarjeta_grafica }}</td>
                        <td>{{ $computador->precio }}</td>
                        <td>{{ $computador->descripcion }}</td>
                        <td><a href="{{ $computador->imagen }}" target="_blank">Ver Imagen</a></td>
                        <td>{{ $computador->procesador }}</td>
                        <td>
                            <a href="{{ route('computadores.edit', $computador->id) }}" class="action-link">Editar</a>
                            <form action="{{ route('computadores.destroy', $computador->id) }}" method="POST" class="action-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este computador?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection