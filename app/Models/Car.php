<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory; 

    // Tentukan nama tabel secara eksplisit
    protected $table = 'cars'; 

    public function customers() 
    { 
        return $this->hasMany(Customer::class);
    } 
}