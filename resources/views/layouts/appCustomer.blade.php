<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<style>
    /* Pastikan latar belakang memenuhi seluruh halaman */
    html, body {
        height: 100%; /* Tinggi penuh untuk halaman */
        margin: 0; /* Hilangkan margin default */
    }

    body {
        display: flex;
        flex-direction: column; /* Tata letak kolom */
        background-image: url('/images/bglagi.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* Menjaga gambar tetap di tempat */
    }

    main {
        flex: 1; /* Membuat konten utama fleksibel */
    }

    footer {
        margin-top: auto; /* Menjaga footer selalu di bawah */
    }
</style>

<body style="background-image: url('/images/bgneh.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    @include('layouts.navCustomer')
    
    @yield('content')
     <!-- Footer -->
     <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <!-- Kolom 1: Kontak -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Jl. Jagir Sidomukti II, Wonokromo, Surabaya, Indonesia</li>
                        <li><i class="bi bi-telephone"></i> +62881027366860</li>
                        <li>
                            <i class="bi bi-envelope"></i> 
                            <a href="mailto:contact@nguengrental.com" class="text-light text-decoration-none">
                                adminnguengg@admin.com
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Kolom 2: Sosial Media -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled d-flex">
                        <li class="me-3">
                            <a href="#" class="text-light text-decoration-none">
                                <i class="bi bi-facebook"></i> Facebook
                            </a>
                        </li>
                        <li class="me-3">
                            <a href="#" class="text-light text-decoration-none">
                                <i class="bi bi-instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none">
                                <i class="bi bi-twitter"></i> Twitter
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Kolom 3: Tentang -->
                <div class="col-lg-4 col-md-12">
                    <h5>About</h5>
                    <p>
                        Ngueng Rent is your trusted car rental service, offering the best cars for your journey. 
                        Choose us for reliable, affordable, and premium services.
                    </p>
                </div>
            </div>
            
            <!-- Footer Bawah -->
            <div class="text-center mt-3">
                &copy; 2025 Ngueng Rent. All Rights Reserved.
            </div>
        </div>
    </footer> 
    @vite('resources/js/app.js')
</body>
</html>