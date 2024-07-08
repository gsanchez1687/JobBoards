<?php

namespace Database\Seeders;
use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Currency = [
            'USD',
            'EUR',
            'ARS',
            'BRL',
            'CLP',
            'COP',
            'MXN',
            'PEN',
            'UYU',
            'VEF',
        ];
        foreach ($Currency as $currency) {
            Currency::create(['name' => $currency]);
        }
    }
}
