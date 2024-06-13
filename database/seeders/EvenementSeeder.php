<?php

namespace Database\Seeders;

use App\Models\Evenement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evenement::create([
            'nom' => 'ForTheNight',
            'theme' => 'Show',
            'date_debut' => '13/06/2024',
            'date_fin' => '15/06/2024',
            'lieu' => 'Cotonou',
            'heure_debut' => '19:45',
            'descrption' => 'Du lourd les amis!!',
            'image' => 'photo',
        ]);
    }
}
