<nav class="navbar navbar-expand-lg bg-body-tertiary font-roboto fs-7 shadow p-navbar bg-white"
    style="position: sticky; top: 0; z-index: 999">
    <div class="container-fluid letter-spacing-3">
        <a class="navbar-brand me-5" href="#">
            <img src="{{ asset('images/navbar_logo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link active-navbar" aria-current="page" href="#home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#explore">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#why">WHY PLORARS?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#join">JOIN US</a>
                </li>
            </ul>
            <button type="button"
                class="btn btn-primary letter-spacing-3 px-4 py-2 rounded-pill button-gradient fs-7 ms-auto">
                SIGN IN
            </button>
        </div>
    </div>
</nav>
