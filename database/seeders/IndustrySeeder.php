<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industry;
class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
            ['name' => 'Electrical', 'img' => 'test.png'],
            ['name' => 'HVAC', 'img' => 'test.png'],
            ['name' => 'Handyman', 'img' => 'test.png'],
            ['name' => 'Plumbing', 'img' => 'test.png'],
        ];

        foreach ($industries as $industry) {
            Industry::create($industry);
        }
    }
}