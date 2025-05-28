@extends('layouts.app')

@section('title', 'Crear Computador')

@section('content')
    <h2>Crear Nuevo Computador</h2>
    <form action="{{ route('computadores.store') }}" method="POST">
        @csrf
        <div>
            <label for="codigo_tienda">Código de Tienda:</label>
            <input type="text" id="codigo_tienda" name="codigo_tienda" required>
        </div>
        <div>
            <label for="almacenamiento">Almacenamiento:</label>
            <select id="almacenamiento" name="almacenamiento" required>
                <option value="256GB">256GB</option>
                <option value="512GB">512GB</option>
                <option value="1TB">1TB</option>
            </select>
        </div>
        <div>
            <label for="ram">RAM:</label>
            <select id="ram" name="ram" required>
                <option value="8GB">8GB</option>
                <option value="16GB">16GB</option>
                <option value="32GB">32GB</option>
            </select>
        </div>
        <div>
            <label for="tarjeta_grafica">Tarjeta Gráfica:</label>
            <select id="tarjeta_grafica" name="tarjeta_grafica" required>
                <option value="NVIDIA GTX 1650">NVIDIA GTX 1650</option>
                <option value="AMD Radeon RX 580">AMD Radeon RX 580</option>
                <option value="Intel UHD Graphics">Intel UHD Graphics</option>
            </select>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>
        <div>
            <label for="imagen">URL de Imagen:</label>
            <input type="url" id="imagen" name="imagen" required>
        </div>
        <div>
            <label for="procesador">Procesador:</label>
            <select id="procesador" name="procesador" required>
                <option value="Intel i5">Intel i5</option>
                <option value="Intel i7">Intel i7</option>
                <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                <option value="AMD Ryzen 7">AMD Ryzen 7</option>
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('computadores.index') }}">Volver al Listado</a>
@endsection