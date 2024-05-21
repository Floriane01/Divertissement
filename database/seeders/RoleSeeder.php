<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        foreach (RoleEnum::cases() as $roleEnum) {
            Role::create([
                'name' =>$roleEnum->value,
            ]);
        }


        (Permission::create([

            'name' => 'utilisateur-cards.*'

        ]))->assignRole(Role::where('name', RoleEnum::ORGANISATEUR->value));

    }
}
