<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([ 
            [ 
                'firstname' => 'Andin', 
                'lastname' => 'Aqmarina', 
                'email'=> 'andiniaqmarinap@gmail.com', 
                'age' => 20, 
                'car_id' => 1 
            ], 
            [ 
                'firstname' => 'Althaf', 
                'lastname' => 'Farrel', 
                'email'=> 'althaffarrelbusiness@gmail.com', 
                'age' => 25, 
                'car_id' => 2 
            ], 
            [ 
                'firstname' => 'Alfian', 
                'lastname' => 'Hakim', 
                'email'=> 'alfianhakim@gmail.com', 
                'age' => 23, 
                'car_id' => 3 
            ], 
        ]);
    }
}
