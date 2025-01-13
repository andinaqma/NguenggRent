<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HomeCustomerController extends Controller
{
    public function index()
    {
        $pageTitle = 'Silahkan Isi Form Anda';
        $takenCarIds = Customer::pluck('car_id')->toArray();
        $cars = Car::whereNotIn('id', $takenCarIds)->get(); // Ambil mobil yang belum dipilih
        return view('homeCustomer', compact('pageTitle', 'cars'));
    }
    public function create()
    {
        $pageTitle = 'Create Customer';

        // ELOQUENT
        $cars = Car::all();

        return view('customer.create', compact('pageTitle', 'cars'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'ktp' => 'required|numeric',
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'car' => 'required|exists:cars,id',

        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Simpan file
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public'); // Simpan ke folder `storage/app/public/uploads`
        }

        // Simpan data customer
        $customer = new Customer;
        $customer->firstname = $request->firstName;
        $customer->lastname = $request->lastName;
        $customer->email = $request->email;
        $customer->age = $request->age;
        $customer->ktp = $request->ktp;
        $customer->rental_date = $request->rental_date;
        $customer->return_date = $request->return_date;
        $customer->car_id = $request->car;
        $customer->file_path = $filePath; // Simpan path file ke database
        $customer->save();
        $validator = Validator::make($request->all(), [
            // Validasi lainnya
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // File harus berupa gambar/pdf dengan ukuran maksimal 2MB
        ], $messages);


        return redirect()->route('customers.index');
    }
}
