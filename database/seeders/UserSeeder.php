<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\Hash; 
use App\Models\User; // Pastikan untuk mengimpor model User 
 
class UserSeeder extends Seeder 
{ 
    public function run() 
    { 
        User::create([ 
            'name' => 'Administrator', 
            'email' => 'adminnguengg@admin.com', 
            'password' => Hash::make('adminadmin'), // Enkripsi password 
        ]); 
    } 
} 