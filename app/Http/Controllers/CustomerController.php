<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Customer List';
         // RAW SQL QUERY 
        $customers = DB::select(' 
            select *, customers.id as customer_id, cars.name as 
    car_name 
            from customers 
            left join cars on customers.car_id = cars.id 
        '); 

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
        $cars = DB::select('select * from cars'); 
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
            'car' => 'required|exists:car,id',

        ], $messages); 
     
        if ($validator->fails()) { 
            return redirect()->back()->withErrors($validator)->withInput(); 
        }
         // INSERT QUERY 
        DB::table('customers')->insert([ 
            'firstname' => $request->firstName, 
            'lastname' => $request->lastName, 
            'email' => $request->email, 
            'age' => $request->age, 
            'car_id' => $request->car, 
        ]); 
        return redirect()->route('customers.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Customer Detail'; 
 
    // RAW SQL QUERY 
        $customer = collect(DB::select(' 
            select *, customers.id as customer_id, cars.name as 
    car_name 
            from customers 
            left join cars on customers.car_id = cars.id 
            where customers.id = ? 
        ', [$id]))->first(); 
 
        return view('customer.show', compact('pageTitle', 'customer')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Customer';
        $customer = DB::table('customers')
            ->where('id', $id)
            ->first();
        $cars = DB::table('cars')
            ->get();

    return view('customer.edit', compact('pageTitle', 'customer', 'cars'));
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
        ], $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        DB::table('customers')
            ->where('id', $id)
            ->update([
                'firstname' => $request->firstName,
                'lastname' => $request->lastName,
                'email' => $request->email,
                'age' => $request->age,
                'car_id' => $request->car,
            ]);
    
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // QUERY BUILDER 
        DB::table('customers') 
            ->where('id', $id) 
            ->delete(); 

        return redirect()->route('customers.index'); 
    }
}
