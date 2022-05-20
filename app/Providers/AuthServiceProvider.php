<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */ 
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->loginPermissionPolicies();
    }
     public function loginPermissionPolicies(){
      Gate::define('admin',function($user){
        return $user->hasAccess(['admin']);
      }); 
      Gate::define('owner',function($user){
        return $user->hasAccess(['owner']);
      }); 
       Gate::define('subadmin',function($user){
        return $user->hasAccess(['subadmin']);
      }); 
    }
}
