<?php

namespace App\Http\Controllers;
use App\Repositories\PatrullaRepository;
use Illuminate\Http\Request;
use App\Models\Patrulla;

class PatrullaController extends Controller
{

    protected $patrullas;

    public function __construct(PatrullaRepository $patrullas){
        $this->patrullas= $patrullas;
    }
    public function index()
    {
        $patrullas = $this->patrullas->getAll();
        
        return view('patrulla.show', ['patrullas' => $patrullas]);


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

        return redirect()->route('patrulla.show')->with('success', 'Patrulla creada correctamente.');
    }

    public function showOne($matricula)
    {
        $patrulla = Patrulla::find($matricula);
        return view('patrulla.showOne', compact('patrulla'));
    }

    public function showAll()
    {
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
