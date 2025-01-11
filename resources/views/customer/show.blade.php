@extends('layouts.app') 
 
@section('content') 
    <div class="container-sm my-5"> 
        <div class="row justify-content-center"> 
            <div class="p-5 bg-light rounded-3 col-xl-4 border"> 
                <div class="mb-3 text-center"> 
                    <i class="bi-person-circle fs-1"></i> 
                    <h4>Detail Customer</h4> 
                </div> 
                <hr> 
                <div class="row"> 
                    <div class="col-md-12 mb-3"> 
                        <label for="firstName" class="form-label">First 
Name</label> 
                        <h5>{{ $customer->firstname }}</h5> 
                    </div> 
                    <div class="col-md-12 mb-3"> 
                        <label for="lastName" class="form-label">Last 
Name</label> 
                        <h5>{{ $customer->lastname }}</h5> 
 
 
                    </div> 
                    <div class="col-md-12 mb-3"> 
                        <label for="email" class="form
label">Email</label> 
                        <h5>{{ $customer->email }}</h5> 
                    </div> 
                    <div class="col-md-12 mb-3"> 
                        <label for="age" class="form-label">Age</label> 
                        <h5>{{ $customer->age }}</h5> 
                    </div>
                    <div class="col-md-12 mb-3"> 
                        <label for="ktp" class="form-label">Identity Number (KTP)</label> 
                        <h5>{{ $customer->ktp }}</h5> 
                    </div> 
                    <div class="col-md-12 mb-3"> 
                        <label for="rental_date" class="form-label">Rental Date</label> 
                        <h5>{{ $customer->rental_date }}</h5> 
                    </div> 
                    <div class="col-md-12 mb-3"> 
                        <label for="return_date" class="form-label">Return Date</label> 
                        <h5>{{ $customer->return_date }}</h5> 
                    </div>
                    <div class="col-md-12 mb-3"> 
                        <label for="age" class="form
label">Car</label> 
                        <h5>{{ $customer->car->name }}</h5> 
                    </div> 
                </div> 
                <hr> 
                <div class="row"> 
                    <div class="col-md-12 d-grid"> 
                        <a href="{{ route('customers.index') }}" 
class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle 
me-2"></i> Back</a> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
@endsection