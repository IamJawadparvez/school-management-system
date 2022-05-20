<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesSeeder extends Seeder
{

    public function run(){

         $admin = Role::create([
          
           'name' => 'Admin',
           'slug' => 'admin',
           'permissions' => json_encode([
             'admin' => true
           ])

        ]);

        $customer = Role::create([
          
           'name' => 'Customer',
           'slug' => 'customer',
           'permissions' => json_encode([
             'customer' => true
           ])  

        ]);

    }
}
