<?php

namespace Database\Seeders;
use App\Models\statuses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['name' => 'Pendiente'],
            ['name' => 'Aprobado'],
            ['name' => 'Rechazado'],
        ];
        foreach ($status as $statu) {
            statuses::create($statu);
        }
    }
}
