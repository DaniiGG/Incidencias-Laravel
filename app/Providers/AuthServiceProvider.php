<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Policies\IncidentePolicy;
use App\Models\Incidente;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Incidente::class => IncidentePolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}