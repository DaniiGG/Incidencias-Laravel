<html>
<head>
<link rel="stylesheet" href="{!! asset('css/header.css') !!}">
@vite([ 'resources/js/app.js'])
</head>
<div class="navbar">
    <h1><a href="{{ url('/') }}">Incidencias</a></h1>
        @if (Route::has('login'))
                <div >
                
                @auth
                    <a href="{{ url('/patrulla/showAll') }}" >Patrullas</a>
                    <a href="{{ url('/incidentes') }}" >Incidentes</a>
                    
                    @if(Auth::user()->roles == 'Oficial')
                        <a href="{{ url('/policias') }}" >Ver policías</a>
                        <a href="{{ route('register') }}" >Registrar agente</a>
                        
                    @endif
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <a class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                           
                        </a>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
                @else
                    <a href="{{ route('login') }}" >Log in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                @endauth
                </div>
        @endif
</div>
</html>