@extends('layouts.app')

@section('title', 'Editar Computador')

@section('content')
    <h2>Editar Computador</h2>
    <form action="{{ route('computadores.update', $computador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="codigo_tienda">Código de Tienda:</label>
            <input type="text" id="codigo_tienda" name="codigo_tienda" value="{{ $computador->codigo_tienda }}" required>
        </div>
        <div>
            <label for="almacenamiento">Almacenamiento:</label>
            <select id="almacenamiento" name="almacenamiento" required>
                <option value="256GB" {{ $computador->almacenamiento == '256GB' ? 'selected' : '' }}>256GB</option>
                <option value="512GB" {{ $computador->almacenamiento == '512GB' ? 'selected' : '' }}>512GB</option>
                <option value="1TB" {{ $computador->almacenamiento == '1TB' ? 'selected' : '' }}>1TB</option>
            </select>
        </div>
        <div>
            <label for="ram">RAM:</label>
            <select id="ram" name="ram" required>
                <option value="8GB" {{ $computador->ram == '8GB' ? 'selected' : '' }}>8GB</option>
                <option value="16GB" {{ $computador->ram == '16GB' ? 'selected' : '' }}>16GB</option>
                <option value="32GB" {{ $computador->ram == '32GB' ? 'selected' : '' }}>32GB</option>
            </select>
        </div>
        <div>
            <label for="tarjeta_grafica">Tarjeta Gráfica:</label>
            <select id="tarjeta_grafica" name="tarjeta_grafica" required>
                <option value="NVIDIA GTX 1650" {{ $computador->tarjeta_grafica == 'NVIDIA GTX 1650' ? 'selected' : '' }}>NVIDIA GTX 1650</option>
                <option value="AMD Radeon RX 580" {{ $computador->tarjeta_grafica == 'AMD Radeon RX 580' ? 'selected' : '' }}>AMD Radeon RX 580</option>
                <option value="Intel UHD Graphics" {{ $computador->tarjeta_grafica == 'Intel UHD Graphics' ? 'selected' : '' }}>Intel UHD Graphics</option>
            </select>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" value="{{ $computador->precio }}" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required>{{ $computador->descripcion }}</textarea>
        </div>
        <div>
            <label for="imagen">URL de Imagen:</label>
            <input type="url" id="imagen" name="imagen" value="{{ $computador->imagen }}" required>
        </div>
        <div>
            <label for="procesador">Procesador:</label>
            <select id="procesador" name="procesador" required>
                <option value="Intel i5" {{ $computador->procesador == 'Intel i5' ? 'selected' : '' }}>Intel i5</option>
                <option value="Intel i7" {{ $computador->procesador == 'Intel i7' ? 'selected' : '' }}>Intel i7</option>
                <option value="AMD Ryzen 5" {{ $computador->procesador == 'AMD Ryzen 5' ? 'selected' : '' }}>AMD Ryzen 5</option>
                <option value="AMD Ryzen 7" {{ $computador->procesador == 'AMD Ryzen 7' ? 'selected' : '' }}>AMD Ryzen 7</option>
            </select>
        </div>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('computadores.index') }}">Volver al Listado</a>
@endsection