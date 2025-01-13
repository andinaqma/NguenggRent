<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use App\Models\Car;
use PDF;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Customer List'; 
 
        // ELOQUENT 
        $customers = Customer::all(); 
     
        return view('customer.index', [ 
            'pageTitle' => $pageTitle, 
            'customers' => $customers 
        ]); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Customer'; 
        // ELOQUENT 
        $cars = Car::all(); 
        return view('customer.create', compact('pageTitle', 'cars')); 
    }

    /**
     * Store a newly created resource in storage.
     */
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
         // ELOQUENT 
        $customer = New Customer; 
        $customer->firstname = $request->firstName; 
        $customer->lastname = $request->lastName; 
        $customer->email = $request->email; 
        $customer->age = $request->age;
        $customer->ktp = $request->ktp;
        $customer->rental_date = $request->rental_date;
        $customer->return_date = $request->return_date;
        $customer->car_id = $request->car; 
        $customer->save(); 
 
        return redirect()->route('customers.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $id) 
{ 
    $pageTitle = 'Customer Detail'; 
 
    // ELOQUENT 
    $customer = Customer::find($id); 
 
    return view('customer.show', compact('pageTitle', 'customer'));
}
    public function edit(string $id)
    {
        $pageTitle = 'Edit Customer'; 
    
        // ELOQUENT 
        $cars = Car::all(); 
        $customer = Customer::find($id); 
    
        return view('customer.edit', compact('pageTitle', 'cars', 'customer')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka',
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
    
        // ELOQUENT 
        $customer = Customer::find($id); 
        $customer->firstname = $request->firstName; 
        $customer->lastname = $request->lastName; 
        $customer->email = $request->email; 
        $customer->age = $request->age;
        $customer->ktp = $request->ktp;
        $customer->rental_date = $request->rental_date;
        $customer->return_date = $request->return_date;
        $customer->car_id = $request->car; 
        $customer->save(); 
    
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { 
         // ELOQUENT 
         Customer::find($id)->delete(); 
         return redirect()->route('customers.index');  
    }
    public function downloadpdf()
    {
        $data = show::limit(20)->get();
        $pdf = PDF::loadView('show-pdf', compact('data'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('show.pdf');
    }
}
