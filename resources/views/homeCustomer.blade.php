@extends('layouts.appCustomer')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <!-- Form -->
                <div class="col-md-8">
                    <div class="p-5 bg-light rounded-3 border"
                        style="border-color: #000000 !important; background-color: #000000c9 !important;">
                        <div class="mb-3 text-center">
                            <i class="bi-person-circle fs-1"></i>
                            <h4 style="color: #FFFFFF;">Rental Form</h4>
                        </div>
                        <hr style="border: 1px solid #f9f8f8;">
                        <div class="row">
                            <!-- First Name -->
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label" style="color: #FFFFFF;">First Name</label>
                                <input class="form-control @error('firstName') is-invalid @enderror" type="text"
                                    name="firstName" id="firstName" value="{{ old('firstName') }}"
                                    placeholder="Enter First Name"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('firstName')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Last Name -->
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label" style="color: #FFFFFF;">Last Name</label>
                                <input class="form-control @error('lastName') is-invalid @enderror" type="text"
                                    name="lastName" id="lastName" value="{{ old('lastName') }}"
                                    placeholder="Enter Last Name"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('lastName')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label" style="color: #FFFFFF;">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('email')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Age -->
                            <div class="col-md-6 mb-3">
                                <label for="age" class="form-label" style="color: #FFFFFF;">Age</label>
                                <input class="form-control @error('age') is-invalid @enderror" type="number" name="age"
                                    id="age" value="{{ old('age') }}" placeholder="Enter Age"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('age')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- KTP -->
                            <div class="col-md-12 mb-3">
                                <label for="ktp" class="form-label" style="color: #FFFFFF;">Identity Number
                                    (KTP)</label>
                                <input class="form-control @error('ktp') is-invalid @enderror" type="text" name="ktp"
                                    id="ktp" value="{{ old('ktp') }}" placeholder="Enter Identity Number"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('ktp')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Upload File -->
                            <div class="col-md-12 mb-3">
<<<<<<< HEAD
                                <label for="file" class="form-label" style="color: #FFFFFF;">Upload Driver's license</label>
=======
                                <label for="file" class="form-label" style="color: #FFFFFF;">Upload Driver's License (SIM A)</label>
>>>>>>> 7c2470a3dc081ddd9cc28e5ffeb1f235c6a6cc4f
                                <input class="form-control @error('file') is-invalid @enderror" type="file"
                                    name="file" id="file"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('file')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Rental Date -->
                            <div class="col-md-6 mb-3">
                                <label for="rental_date" class="form-label" style="color: #FFFFFF;">Rental Date</label>
                                <input class="form-control @error('rental_date') is-invalid @enderror" type="date"
                                    name="rental_date" id="rental_date" value="{{ old('rental_date') }}"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('rental_date')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Return Date -->
                            <div class="col-md-6 mb-3">
                                <label for="return_date" class="form-label" style="color: #FFFFFF;">Return Date</label>
                                <input class="form-control @error('return_date') is-invalid @enderror" type="date"
                                    name="return_date" id="return_date" value="{{ old('return_date') }}"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                @error('return_date')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <!-- Car -->
                            <div class="col-md-12 mb-3">
                                <label for="car" class="form-label" style="color: #FFFFFF;">Car</label>
                                <select name="car" id="car" class="form-select"
                                    style="border-color: #000000;background-color: #ffffffcf;">
                                    <option value="" disabled selected>Select Car</option>
                                    @if ($cars->isEmpty())
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
                                <a href="{{ route('customers.index') }}" class="btn btn-danger btn-lg mt-3"
                                    style="border-color: #0e0e0e; background-color: #b51200b6;">
                                    <i class="bi-arrow-left-circle me-2"></i>Cancel
                                </a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button id="btn" type="submit" class="btn btn-success btn-lg mt-3"
                                    style="background-color: #0fe54fa5; border-color: #000000;">
                                    <i class="bi-check-circle me-2"></i>Save
                                </button>
                                <script src="dist/sweetalert2.all.min.js"></script>
                                <script>
                                    const btn = document.getElementById('btn');
                                    btn.addEventListener('click', function() {
                                        swal.fire({
                                            title: '<span style="color:#0fe54f">🎉 Form Submitted!</span>',
                                            html: '<b>Thank you</b> for using <span style="color:#ff5733">Nguengg Rents</span> services! <br> We appreciate your trust. 😊',
                                            icon: 'success',
                                            iconColor: '#0fe54f', // Warna ikon
                                            timer: 10000,
                                            showConfirmButton: false, // Tombol konfirmasi
                                            confirmButtonColor: '#0fe54f',
                                            background: '#f7f9fc' // Latar belakang
                                        })
                                    });
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <!-- ini tabel mobil yang tersedia di rental -->
        <div class="row justify-content-between mt-5">
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Honda Civic 2024</h4>
                    </div>
                    <img src="{{ asset('images/honda-civic-2024.png') }}" class="card-img-top" alt="Honda Civic 2024">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">Engine: 1.5L DOHC 4-Cylinder Turbo, producing 178 PS (approximately
                                175 HP) at 6,000 rpm and 240 Nm torque at 1,700–4,500 rpm.</li>
                            <li style="color: #FFFFFF;">Transmission: CVT</li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Honda HR-V 2022</h4>
                    </div>
                    <img src="{{ asset('images/honda-hrv-2022.png') }}" class="card-img-top" alt="Honda HR-V 2022">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">Engine: 1.5L VTEC Turbo, producing 177 PS (approximately 175 HP) at
                                6,000 rpm and a maximum torque of 240 Nm at 1,700–4,500 rpm.</li>
                            <li style="color: #FFFFFF;">Transmission: CVT</li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Daihatsu Terios 2022</h4>
                    </div>
                    <img src="{{ asset('images/daihatsu-terios-2022.png') }}" class="card-img-top"
                        alt="Daihatsu Terios 2022">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">Engine: 1.5L 2NR-VE DOHC Dual VVT-i, producing 103 HP at 6,000 rpm
                                and a maximum torque of 13.9 kg.m at 4,200 rpm.</li>
                            <li style="color: #FFFFFF;">Transmission: 5-speed manual or 4-speed automatic</li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 7 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Toyota Innova Zenix 2025</h4>
                    </div>
                    <img src="{{ asset('images/innovaa.png') }}" class="card-img-top" alt="Toyota Innova Zenix 2025">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">Engine: 2.0L M20A-FKS Dynamic Force Engine, 4-cylinder, Dual VVT-i,
                                producing 174 PS at 6,600 rpm and 20.9 kg·m of torque at 4,500–4,900 rpm.</li>
                            <li style="color: #FFFFFF;">Transmission: 10-speed CVT with Direct Shift.</li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 7 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- card baris 2-->
        <div class="row justify-content-between mt-5">
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Honda Brio 2023</h4>
                    </div>
                    <img src="{{ asset('images/honda-brio-2023.png') }}" class="card-img-top" alt="Honda Brio 2023">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">1.2L SOHC 4-cylinder in-line, 16 valves i-VTEC + DBW, with a
                                displacement of 1,198 cc.</li>
                            <li style="color: #FFFFFF;">Transmission: Available in both 5-speed Manual and CVT.</li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Suzuki Jimny 2018</h4>
                    </div>
                    <img src="{{ asset('images/jimny.jpg') }}" class="card-img-top" alt="Suziki Jimny 2018">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">Engine: 1.5L 4-cylinder in-line, DOHC, dengan displacement 1,462
                                cc.</li>
                            <li style="color: #FFFFFF;">Transmission: 5-speed Manual and 4-speed Automatic.</li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 4 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Toyota Yaris Cross 2023</h4>
                    </div>
                    <img src="{{ asset('images/yaris.png') }}" class="card-img-top" alt="Toyota Yaris Cross 2023">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">Engine: 1.5L naturally aspirated (NA) engine.</li>
                            <li style="color: #FFFFFF;">Transmission: CVT (Continuously Variable Transmission).</li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #000000be;">
                    <div class="card-header text-center">
                        <h4 style="color: #FFFFFF;">Toyota Raize 2022</h4>
                    </div>
                    <img src="{{ asset('images/raize.jpg') }}" class="card-img-top" alt="Toyota Raize 2022">
                    <div class="card-body">
                        <ul>
                            <li style="color: #FFFFFF;">Engine: 1.0L Turbo atau 1.2L, 3-silinder.</li>
                            <li style="color: #FFFFFF;">Transmission: CVT (Continuously Variable Transmission) automatic.
                            </li>
                            <li style="color: #FFFFFF;">Passenger Capacity: 5 persons</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
