@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-black">
    <div class="container">
        <a href="{{ route('homeCustomer') }}" class="navbar-brand mb-0 h1" style="color: #FFD700;">
            Nguengg
        </a>
        <a href="{{ route('homeCustomer') }}" class="navbar-brand mb-0 h1" style="color: #FFFFFF;">
            Rent
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <!-- Logout Button -->
            <div class="ms-auto">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        <i class="bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
