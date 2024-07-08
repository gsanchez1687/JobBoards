<?php

namespace Database\Seeders;

use App\Models\TypeJobs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $typeJobs = [
            ['name' => 'Full-time'],
            ['name' => 'Part-time'],
            ['name' => 'Freelance'],
            ['name' => 'Internship'],
            ['name' => 'Temporal'],
            ['name' => 'Remoto'],
        ];
        foreach ($typeJobs as $typeJob) {
            TypeJobs::create($typeJob);
        }

    }
}
