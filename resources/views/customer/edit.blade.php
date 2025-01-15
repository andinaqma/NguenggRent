@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="card-title">Edit Customer</h4>
                    </div>
                    <div class="card-body">
                        <!-- Form -->
                        <form action="{{ route('customers.update', ['customer' => $customer->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row justify-content-center">
                                <div class="p-5 bg-light rounded-3">
                                    <div class="mb-3 text-center">
                                        <i class="bi-person-circle fs-1"></i>
                                        <h4>Edit Customer</h4>
                                    </div>
                                    <hr>

                                    <!-- Input Fields -->
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input class="form-control @error('firstName') is-invalid @enderror"
                                                type="text" name="firstName" id="firstName"
                                                value="{{ old('firstName', $customer->firstName) }}"
                                                placeholder="Enter First Name">
                                            @error('firstName')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>

                                        <!-- Last Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input class="form-control @error('lastName') is-invalid @enderror"
                                                type="text" name="lastName" id="lastName"
                                                value="{{ old('lastName', $customer->lastName) }}"
                                                placeholder="Enter Last Name">
                                            @error('lastName')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control @error('email') is-invalid @enderror" type="text"
                                                name="email" id="email" value="{{ old('email', $customer->email) }}"
                                                placeholder="Enter Email">
                                            @error('email')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>

                                        <!-- Age -->
                                        <div class="col-md-6 mb-3">
                                            <label for="age" class="form-label">Age</label>
                                            <input class="form-control @error('age') is-invalid @enderror" type="text"
                                                name="age" id="age" value="{{ old('age', $customer->age) }}"
                                                placeholder="Enter Age">
                                            @error('age')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="ktp" class="form-label">Identity Number (KTP)</label>
                                            <input class="form-control @error('ktp') is-invalid @enderror" type="text"
                                                name="ktp" id="ktp" value="{{ old('ktp', $customer->ktp) }}"
                                                placeholder="Enter Identity Number (KTP)">
                                            @error('ktp')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <!-- Upload Driver's License (SIM A) -->
                                        <div class="col-md-12 mb-3">
                                            <label for="file" class="form-label">Upload Driver's License (SIM A)</label>
                                            <input class="form-control @error('file') is-invalid @enderror" type="file"
                                                name="file" id="file"
                                                style="border-color: #000000;background-color: #ffffffcf;">
                                            @error('file')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <!-- Rental Date -->
                                        <div class="col-md-6 mb-3">
                                            <label for="rental_date" class="form-label">Rental Date</label>
                                            <input class="form-control @error('rental_date') is-invalid @enderror"
                                                type="date" name="rental_date" id="rental_date"
                                                value="{{ old('rental_date', $customer->rental_date) }}">
                                            @error('rental_date')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>

                                        <!-- Return Date -->
                                        <div class="col-md-6 mb-3">
                                            <label for="return_date" class="form-label">Return Date</label>
                                            <input class="form-control @error('return_date') is-invalid @enderror"
                                                type="date" name="return_date" id="return_date"
                                                value="{{ old('return_date', $customer->return_date) }}">
                                            @error('return_date')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                        <!-- car -->
                                        <div class="col-md-12 mb-3">
                                            <label for="car" class="form-label">Car</label>
                                            <select name="car" id="car" class="form-select">
                                                @foreach ($cars as $car)
                                                    <option value="{{ $car->id }}"
                                                        {{ old('car', $customer->car_id) == $car->id ? 'selected' : '' }}>
                                                        {{ $car->code . ' - ' . $car->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('car')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- Buttons -->
                                    <div class="row">
                                        <div class="col-md-6 d-grid">
                                            <a href="{{ route('customers.index') }}"
                                                class="btn btn-outline-dark btn-lg mt-3">
                                                <i class="bi-arrow-left-circle me-2"></i> Cancel
                                            </a>
                                        </div>
                                        <div class="col-md-6 d-grid">
                                            <button type="submit" class="btn btn-dark btn-lg mt-3">
                                                <i class="bi-check-circle me-2"></i> Edit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
@endsection
