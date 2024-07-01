<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Evenement;
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

        \App\Models\User::factory()->create([
            'nom' => 'Djk',
            'prenom' => 'Divin',
            'email' => 'divindjk@gmail.com',
            'password' => '$2y$12$U.ieKXuTzN8/RwqFj5i02u9qCRgcQpXj4jb.J4j.botSX0Oyg98VO',
            'telephone' => '90909090',
            'photo' => 'photo',
            'premium' => '0',
        ]);
        \App\Models\User::factory()->create([
            'nom' => 'Djk',
            'prenom' => 'Nina',
            'email' => 'ninadjk@gmail.com',
            'password' => '$2y$12$U.ieKXuTzN8/RwqFj5i02u9qCRgcQpXj4jb.J4j.botSX0Oyg98VO',
            'telephone' => '90909090',
            'photo' => 'photo',
            'premium' => 'false',
        ]);

        Sponsor::factory()->count(4)->create();

    }
}
