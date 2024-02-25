<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chollo;

class CholloController extends Controller
{
    public function index()
    {
        // Obtener todos los chollos y pasarlos a la vista
        $chollos = Chollo::all();
        return view('chollos.index', compact('chollos'));
    }

    public function create()
    {
        // Mostrar el formulario de creación
        return view('chollos.create');
    }

    public function store(Request $request)
    {

        Chollo::create($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo creado exitosamente');
    }

    public function edit($id)
    {
        // Mostrar el formulario de edición con la información del chollo
        $chollo = Chollo::findOrFail($id);
        return view('chollos.edit', compact('chollo'));
    }

    public function update(Request $request, $id)
    {
        $chollo = Chollo::findOrFail($id);
        $chollo->update($request->all());

        return redirect()->route('chollos.index')->with('success', 'Chollo actualizado exitosamente');
    }

    public function destroy($id)
    {
        // Lógica para eliminar un chollo de la base de datos
        $chollo = Chollo::findOrFail($id);
        $chollo->delete();

        return redirect()->route('chollos.index')->with('success', 'Chollo eliminado exitosamente');
    }


    public function show($id)
    {
        $chollo = Chollo::findOrFail($id);
        return view('chollos.show', compact('chollo'));
    }
}
