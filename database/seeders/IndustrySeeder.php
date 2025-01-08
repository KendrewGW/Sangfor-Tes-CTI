<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $industries = [
            ['name' => 'IT'],
            ['name' => 'Finance'],
            ['name' => 'Healthcare'],
            ['name' => 'Manufacturing'],
            ['name' => 'Energy'],
            ['name' => 'Education'],
            ['name' => 'Transportation & Logistics'],
        ];

        foreach($industries as $i){
            Industry::create($i);
        }
    }
}
