<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([ 
            [ 
                'code' => 'CVC', 
                'name' => 'Civic', 
                'description' => 'Honda' 
            ], 
            [ 
                'code' => 'HRV', 
                'name' => 'HR-V', 
                'description' => 'Honda' 
            ], 
            [ 
                'code' => 'TRS', 
                'name' => 'Terios', 
                'description' => 'Daihatsu' 
            ], 
            [ 
                'code' => 'INZ', 
                'name' => 'Innova Zenix', 
                'description' => 'Toyota' 
            ],
            [ 
                'code' => 'BRI', 
                'name' => 'BRIO RS', 
                'description' => 'Honda' 
            ],
        ]); 
    }
}
