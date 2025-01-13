<?php
use App\Http\Controllers\HomeController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController; 
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeCustomerController;
use Barryvdh\DomPDF\ServiceProvider as PDF;

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
    Route::resource('customers', CustomerController::class); 
});

// Route default untuk halaman utama
Route::get('/', [AuthController::class, 'showLoginForm']);

//halaman customer
Route::get('/homeCustomer', function () {
    return view('homeCustomer');  // Pastikan sudah ada file view 'homecustomer.blade.php'
})->name('homeCustomer');
Route::get('/homeCustomer', [HomeCustomerController::class, 'index'])->name('homeCustomer');
Route::post('/homeCustomer', [HomeCustomerController::class, 'store']);
Route::get('/customers/create', [HomeCustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [HomeCustomerController::class, 'store'])->name('customers.store');

Route::get('customer/{id}/pdf', function ($id) {
    $customer = App\Models\Customer::findOrFail($id);
    
    $pdf = app('dompdf.wrapper')->loadView('customer.pdf', compact('customer'));
    return $pdf->download('customer_details.pdf');
})->name('customer.pdf');