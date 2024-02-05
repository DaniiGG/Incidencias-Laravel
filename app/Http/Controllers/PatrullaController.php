<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patrulla;

class PatrullaController extends Controller
{
    public function index()
    {
        $patrullas = Patrulla::all();
        return view('patrulla.index', compact('patrullas'));
    }

    public function create()
    {
        return view('patrulla/patrulla-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricula' => 'required|unique:patrulla,matricula',
            'vehiculo' => 'required',
        ]);

        Patrulla::create($request->all());

        return redirect()->route('patrulla/index')->with('success', 'Patrulla creada correctamente.');
    }

    public function show($matricula)
    {
        $patrulla = Patrulla::find($matricula);
        return view('patrulla.show', compact('patrulla'));
    }

    public function edit($matricula)
    {
        $patrulla = Patrulla::find($matricula);
        return view('patrulla.edit', compact('patrulla'));
    }

    public function update(Request $request, $matricula)
    {
        $request->validate([
            'matricula' => 'required',
            'vehiculo' => 'required',
        ]);

        $patrulla = Patrulla::find($matricula);
        $patrulla->update($request->all());

        return redirect()->route('patrulla.index')->with('success', 'Patrulla actualizada correctamente.');
    }

    public function destroy($matricula)
    {
        $patrulla = Patrulla::find($matricula);
        $patrulla->delete();

        return redirect()->route('patrulla.index')->with('success', 'Patrulla eliminada correctamente.');
    }
}
