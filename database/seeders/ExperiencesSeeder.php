<?php

namespace Database\Seeders;

use App\Models\Experiences;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Experiences = [
            'Mas de 1 año',
            'Mas de 2 años',
            'Mas de 3 años',
            'Mas de 4 años',
            'Mas de 5 años',
            'Mas de 6 años',
            'Mas de 7 años',
            'Mas de 8 años',
            'Mas de 9 años',
            'Mas de 10 años',
        ];
        foreach ($Experiences as $experience) {
            Experiences::create(['name' => $experience]);
        }
    }
}
