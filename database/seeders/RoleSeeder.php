<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Role::truncate();

        Schema::enableForeignKeyConstraints();

        $roles = [
            'Super Administrator',
            'Administrator',
            'Editor',
            'Marketing',
            'Sales',
            'Purchase',
            'Finance'
        ];

        foreach($roles as $role){

            Role::create([
                'name' => $role
            ]);
        }
    }
}