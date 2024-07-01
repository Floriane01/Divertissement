<?php

namespace Database\Seeders;

use App\Models\TypeRole;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userPermissions = [

        ];

        $organisateurPermissions = [

        ];

        $adminPermissions = [
            'Gestion des Rôles',
            'Gestion des Evènements',
            'Gestion des Catégories d'/'Evènements',
            'Gestion des Types de Tickets',
            'Gestion des Tickets',
            'Gestion des utilisateurs',

        ];

        $userRole = Role::where('name', 'Utilisateur')->first();
        $organisateurRole = Role::where('name', 'Organisateur')->first();
        $adminRole = Role::where('name', 'Administrateur')->first();

        $userTypeRole = TypeRole::where('libelle', 'Utilisateur')->first();
        $organisateurTypeRole = TypeRole::where('libelle', 'Organisateur')->first();
        $adminTypeRole = TypeRole::where('libelle', 'Administrateur')->first();

        foreach($userPermissions as $permission){
            Permission::create([
                'name' => $permission,
                'type_role_id' => $userTypeRole->id,
            ]);
            $userRole->givePermissionTo($permission);
        }

        foreach($organisateurPermissions as $permission){
            Permission::create([
                'name' => $permission,
                'type_role_id' => $organisateurTypeRole->id,
            ]);
            $organisateurRole->givePermissionTo($permission);
        }

        foreach($adminPermissions as $permission){
            Permission::create([
                'name' => $permission,
                'type_role_id' => $adminTypeRole->id,
            ]);
            $adminRole->givePermissionTo($permission);
        }

    }
}
