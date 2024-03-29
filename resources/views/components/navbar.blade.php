{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CB21016
Student Name: MUHAMMAD AFIQ AMMAR BIN MURAD --}}
@if(auth()->check() && auth()->user()->role_id == 1)
    <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-white">
        <div class="d-flex justify-content-start align-items-center container-fluid" id="navbarbackcolor">
            <div style="margin:0% 16.5% 0% 10%;">
                <a class="navbar-brand" href="{{ route('homedashboard') }}">
                    <img src="{{ asset('images/proj-laravel-logo-no-bg.png') }}" alt="runmalaysia.png" class="homeimage">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-right:28px">
                        <a class="nav-link fw-bold h4" aria-current="page" href="/manage_events">MANAGE EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold h4" href="/listofuser">MANAGE USERS</a>
                    </li>
                    </ul>
                </div>

            </div>
            <div class="dropdown" style="margin-left: 23%;">
                <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('storage/' . auth()->user()->user_photopath) }}" alt="Profile" class="homeimage2 rounded-circle">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </nav>
@else
    <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-white">
        <div class="d-flex justify-content-start align-items-center container-fluid" id="navbarbackcolor">
            <div style="margin:0% 16.5% 0% 10%;">
                <a class="navbar-brand" href="{{ route('homedashboard') }}">
                    <img src="{{ asset('images/proj-laravel-logo-no-bg.png') }}" alt="runmalaysia.png" class="homeimage">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin: 0px 30px">
                        <a class="nav-link fw-bold h4" aria-current="page" href="{{ route('homedashboard') }}">HOME</a>
                    </li>
                    <li class="nav-item" style="margin:0px 30px">
                        <a class="nav-link fw-bold h4" href="/all_event">EVENTS</a>
                    </li>
                    <li class="nav-item" style="margin-left: 0px 30px">
                        <a class="nav-link fw-bold h4" href="/about_us">ABOUT US</a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown" style="margin-left: 22.45%;">
                <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('storage/' . auth()->user()->user_photopath) }}" alt="Profile" class="homeimage2 rounded-circle">
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </nav>
@endif
