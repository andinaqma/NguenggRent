@extends('layouts.appCustomer')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <!-- Form -->
                <div class="col-md-8">
                    <div class="p-5 bg-light rounded-3 border">
                        <div class="mb-3 text-center">
                            <i class="bi-person-circle fs-1"></i>
                            <h4>Form Rent</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <!-- First Name -->
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input class="form-control @error('firstName') is-invalid @enderror" type="text"
                                    name="firstName" id="firstName" value="{{ old('firstName') }}"
                                    placeholder="Enter First Name">
                                @error('firstName')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Last Name -->
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input class="form-control @error('lastName') is-invalid @enderror" type="text"
                                    name="lastName" id="lastName" value="{{ old('lastName') }}"
                                    placeholder="Enter Last Name">
                                @error('lastName')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                                    id="email" value="{{ old('email') }}" placeholder="Enter Email">
                                @error('email')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Age -->
                            <div class="col-md-6 mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input class="form-control @error('age') is-invalid @enderror" type="number" name="age"
                                    id="age" value="{{ old('age') }}" placeholder="Enter Age">
                                @error('age')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- KTP -->
                            <div class="col-md-12 mb-3">
                                <label for="ktp" class="form-label">Identity Number (KTP)</label>
                                <input class="form-control @error('ktp') is-invalid @enderror" type="text" name="ktp"
                                    id="ktp" value="{{ old('ktp') }}" placeholder="Enter Identity Number">
                                @error('ktp')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Rental Date -->
                            <div class="col-md-6 mb-3">
                                <label for="rental_date" class="form-label">Rental Date</label>
                                <input class="form-control @error('rental_date') is-invalid @enderror" type="date"
                                    name="rental_date" id="rental_date" value="{{ old('rental_date') }}">
                                @error('rental_date')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Return Date -->
                            <div class="col-md-6 mb-3">
                                <label for="return_date" class="form-label">Return Date</label>
                                <input class="form-control @error('return_date') is-invalid @enderror" type="date"
                                    name="return_date" id="return_date" value="{{ old('return_date') }}">
                                @error('return_date')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Car -->
                            <div class="col-md-12 mb-3">
                                <label for="car" class="form-label">Car</label>
                                <select name="car" id="car" class="form-select">
                                    <option value="" disabled selected>Select Car</option>
                                    @if($cars->isEmpty())
                                        <option disabled>Car not available</option>
                                    @else
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}"
                                                {{ old('car') == $car->id ? 'selected' : '' }}>
                                                {{ $car->code . ' - ' . $car->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('car')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            
                        </div>
                        <!-- Buttons -->
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('customers.index') }}" class="btn btn-danger btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-success btn-lg mt-3"><i
                                        class="bi-check-circle me-2"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- ini tabel mobil yang tersedia di rental -->
        <div class="row justify-content-between mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Honda Civic 2024</h4>
                    </div>
                    <img src="{{ asset('images/honda-civic-2024.png') }}" class="card-img-top" alt="Honda Civic 2024">
                    <div class="card-body">
                        <ul>
                            <li>Engine: 1.5L DOHC 4-Cylinder Turbo, producing 178 PS (approximately 175 HP) at 6,000 rpm and 240 Nm torque at 1,700–4,500 rpm</li>
                            <li>Transmission: CVT</li>
                            <li>Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Honda HR-V 2022</h4>
                    </div>
                    <img src="{{ asset('images/honda-hrv-2022.png') }}" class="card-img-top" alt="Honda HR-V 2022">
                    <div class="card-body">
                        <ul>
                            <li>Engine: 1.5L VTEC Turbo, producing 177 PS (approximately 175 HP) at 6,000 rpm and a maximum torque of 240 Nm at 1,700–4,500 rpm.</li>
                            <li>Transmission: CVT</li>
                            <li>Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Daihatsu Terios 2022</h4>
                    </div>
                    <img src="{{ asset('images/daihatsu-terios-2022.png') }}" class="card-img-top" alt="Daihatsu Terios 2022">
                    <div class="card-body">
                        <ul>
                            <li>Engine: 1.5L 2NR-VE DOHC Dual VVT-i, producing  103 HP at 6,000 rpm and a maximum torque of 13.9 kg.m at 4,200 rpm.</li>
                            <li>Transmission: 5-speed manual or 4-speed automatic</li>
                            <li>Passenger Capacity: 7 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Toyota Innova Zenix 2025</h4>
                    </div>
                    <img src="{{ asset('images/toyota-innova_zenix-2025.png') }}" class="card-img-top" alt="Toyota Innova Zenix 2025">
                    <div class="card-body">
                        <ul>
                            <li>Engine: 2.0L M20A-FKS Dynamic Force Engine, 4-cylinder, Dual VVT-i, producing 174 PS at 6,600 rpm and 20.9 kg·m of torque at 4,500–4,900 rpm.</li>
                            <li>Transmission:  10-speed CVT with Direct Shift.</li>
                            <li>Passenger Capacity: 7 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Honda Brio 2023</h4>
                    </div>
                    <img src="{{ asset('images/honda-brio-2023.png') }}" class="card-img-top" alt="Toyota Innova Zenix 2025">
                    <div class="card-body">
                        <ul>
                            <li>Engine: 1.2L SOHC 4-cylinder in-line, 16 valves i-VTEC + DBW, with a displacement of 1,198 cc.</li>
                            <li>Transmission: Available in both 5-speed Manual and CVT</li>
                            <li>Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
