<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // Añade más reglas de validación según tus requisitos
        ]);

        // Crea un nuevo usuario
        User::create($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function show(User $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
{
    $usuario = User::find($id);
    return view('usuarios.edit', compact('usuario'));
}

public function update(Request $request, $id)
{
    // Encuentra el usuario por su ID
    $usuario = User::findOrFail($id);

    // Valida los datos del formulario
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $usuario->id,
        // Agrega más reglas de validación según tus requisitos
    ]);

    // Actualiza los datos del usuario
    $usuario->update($request->all());

    // Redirecciona a la vista de índice de usuarios con un mensaje de éxito
    return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
}

    public function destroy(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}