<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use Illuminate\Http\Request;

class ComputadorController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $computadores = Computador::query()
            ->when($query, function ($q) use ($query) {
                return $q->where('codigo_tienda', 'like', "%{$query}%")
                        ->orWhere('procesador', 'like', "%{$query}%");
            })
            ->get();
        return view('computadores.index', compact('computadores'));
    }

    public function create()
    {
        return view('computadores.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo_tienda' => 'required|string|max:255',
            'almacenamiento' => 'required|in:256GB,512GB,1TB',
            'ram' => 'required|in:8GB,16GB,32GB',
            'tarjeta_grafica' => 'required|in:NVIDIA GTX 1650,AMD Radeon RX 580,Intel UHD Graphics',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'required|string',
            'imagen' => 'required|url',
            'procesador' => 'required|in:Intel i5,Intel i7,AMD Ryzen 5,AMD Ryzen 7',
        ]);

        Computador::create($validated);

        return redirect()->route('computadores.index')->with('success', 'Computador creado exitosamente.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $computador = Computador::findOrFail($id);
        dd($computador);
        return view('computadores.edit', compact('computador'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'codigo_tienda' => 'required|string|max:255',
            'almacenamiento' => 'required|in:256GB,512GB,1TB',
            'ram' => 'required|in:8GB,16GB,32GB',
            'tarjeta_grafica' => 'required|in:NVIDIA GTX 1650,AMD Radeon RX 580,Intel UHD Graphics',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'required|string',
            'imagen' => 'required|url',
            'procesador' => 'required|in:Intel i5,Intel i7,AMD Ryzen 5,AMD Ryzen 7',
        ]);

        $computador = Computador::findOrFail($id);
        $computador->update($validated);

        return redirect()->route('computadores.index')->with('success', 'Computador actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $computador = Computador::findOrFail($id);
        $computador->delete();

        return redirect()->route('computadores.index')->with('success', 'Computador eliminado exitosamente.');
    }
}
