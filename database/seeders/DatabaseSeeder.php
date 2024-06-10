<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\RoleEnum;
use App\Models\Role;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call(class: RoleSeeder::class);

        // $organisateurRole = Role::firstWhere('name', RoleEnum::ORGANISATEUR->value);


        // User::factory(count: 5)
        //     ->create()
        //     ->each(
        //         fn (User $user) => $user->assignRole($organisateurRole),
        //     );

        // User::factory()->create([
        //     'name' => 'Super Admin',
        //     'email' => 'admin@test.com',
        // ])->assignRole(Role::firstWhere('name', RoleEnum::SUPER_ADMIN->value));


        // $utilisateurRole = Role::where('name', RoleEnum::UTILISATEUR->value)->first();


        //    User::factory(count: 10)
        //         ->has(
        //             UtilisateurCard::factory(),

        //         )

        //         ->create()

        //         ->each(
        //             fn(User $user) => $user->assignRole($utilisateurRole),
        //         );

        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'nom' => 'Djk',
            'prenom' => 'Divin',
            'email' => 'divindjk@gmail.com',
            'password' => '$2y$12$U.ieKXuTzN8/RwqFj5i02u9qCRgcQpXj4jb.J4j.botSX0Oyg98VO',
            'telephone' => '90909090',
            'photo' => 'photo',
        ]);
        \App\Models\User::factory()->create([
            'nom' => 'Djk',
            'prenom' => 'Nina',
            'email' => 'ninadjk@gmail.com',
            'password' => '$2y$12$U.ieKXuTzN8/RwqFj5i02u9qCRgcQpXj4jb.J4j.botSX0Oyg98VO',
            'telephone' => '90909090',
            'photo' => 'photo',
        ]);

        Sponsor::factory()->count(4)->create();
    }
}
