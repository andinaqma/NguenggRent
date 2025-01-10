<?php
use App\Http\Controllers\HomeController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController; 
use App\Http\Controllers\AuthController;

Route::get('home', [HomeController::class, 'index'])->name('home'); 
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('customers', CustomerController::class); 
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

Auth::routes();
// Route untuk Login dan Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [AuthController::class, 'login'])->name('login.process'); 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 

// Route dengan middleware 'auth'
Route::middleware(['auth'])->group(function () { 
    Route::get('/home', [HomeController::class, 'index'])->name('home'); 
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::resource('customers', CustomerController::class); 
});

// Route default untuk halaman utama
Route::get('/', [AuthController::class, 'showLoginForm']);