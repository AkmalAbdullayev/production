<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    private $roles = ['admin', 'director', 'sklad', 'seller', 'magazin'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles as $role) {
            DB::table("roles")->insert([
                'name' => $role
            ]);
        }
    }
}
