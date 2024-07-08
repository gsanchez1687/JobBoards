<?php

namespace Database\Seeders;

use App\Models\Genders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            ['name' => 'Masculino'],
            ['name' => 'Feminino'],
            ['name' => 'Otro'],
            ['name' => 'Prefiro no informar'],
        ];
        foreach ($genders as $gender) {
            Genders::create($gender);
        }
    }
}
