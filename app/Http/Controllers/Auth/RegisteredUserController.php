<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patrulla;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Repositories\PatrullaRepository;
use Illuminate\Support\Facades\Gate;

class RegisteredUserController extends Controller
{

    protected $patrullas;

    public function __construct(PatrullaRepository $patrullas){
        $this->patrullas= $patrullas;
        
    }
    /**
     * Display the registration view.
     */
    public function create()
    {
        if (Gate::allows('create', User::class)) {
            $patrullas = $this->patrullas->getAll();
            return view('auth.register', ['patrullas' => $patrullas]);
        } else {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'patrulla_id'=>['required', 'int'],
            'roles' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'apellidos'=>$request->apellidos,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'patrulla_id' => $request->patrulla_id,
            'roles' => $request->roles,
        ]);

        event(new Registered($user));

        

        return redirect(RouteServiceProvider::HOME);
    }
}
