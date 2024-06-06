<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\TypeRole;
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

        $userTypeRole = TypeRole::where('libelle', 'Utilisateur')->first();
        $organisateurTypeRole = TypeRole::where('libelle', 'Organisateur')->first();
        $adminTypeRole = TypeRole::where('libelle', 'Administrateur')->first();

        Role::create([
            'name' => 'Utilisateur',
            'type_role_id' => $userTypeRole->id
        ]);

        Role::create([
            'name' => 'Organisateur',
            'type_role_id' => $organisateurTypeRole->id
        ]);

        Role::create([
            'name' => 'Administrateur',
            'type_role_id' => $adminTypeRole->id
        ]);
    }
}
