<nav class="navbar navbar-expand-lg bg-body-tertiary font-roboto fs-7">
    <div class="container-fluid letter-spacing-3">
        {{-- <a class="navbar-brand" href="#">Plorars</a> --}}
        <a class="navbar-brand me-5" href="#">
            <img src="{{ asset('images/navbar_logo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WHY PLORARS?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JOIN US</a>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-primary letter-spacing-3 px-4 py-2 rounded-pill button-gradient fs-7">SIGN
            IN</button>
    </div>
</nav>
