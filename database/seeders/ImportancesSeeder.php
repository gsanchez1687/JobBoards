<?php

namespace Database\Seeders;
use App\Models\Importance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImportancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Importance = [
            'normal',
            'Alta',
            'Urgente',
        ];
        foreach ($Importance as $importance) {
            Importance::create(['name' => $importance]);
        }
    }
}
