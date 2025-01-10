@extends('layouts.app') 
 
@section('content') 
    <div class="container mt-4"> 
        <div class="row mb-0"> 
            <div class="col-lg-9 col-xl-10"> 
                <h4 class="mb-3">{{ $pageTitle }}</h4> 
            </div> 
            <div class="col-lg-3 col-xl-2"> 
                <div class="d-grid gap-2"> 
                    <a href="{{ route('customers.create') }}" class="btn 
btn-primary">Create Customer</a> 
                </div> 
            </div> 
        </div> 
        <hr> 
        <div class="table-responsive border p-3 rounded-3"> 
            <table class="table table-bordered table-hover table-striped 
mb-0 bg-white"> 
                <thead> 
                    <tr> 
                        <th>First Name</th> 
                        <th>Last Name</th> 
                        <th>Email</th> 
                        <th>Age</th> 
                        <th>Car</th> 
                        <th></th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach ($customers as $customer) 
                        <tr> 
                            <td>{{ $customer->firstname }}</td> 
                            <td>{{ $customer->lastname }}</td> 
                            <td>{{ $customer->email }}</td> 
                            <td>{{ $customer->age }}</td> 
                            <td>{{ $customer->car->name }}</td> 
                            <td>@include('customer.actions')</td> 
                        </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
 
 
    </div> 
@endsection