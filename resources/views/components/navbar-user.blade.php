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
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">DISCOVER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TEST</a>
                </li>
            </ul>
            <div class="profile d-flex align-items-center gap-4 flex-row-reverse ms-auto letter-spacing-2">
                <img src="{{ asset('images/profile_icon.png') }}" alt="" class="rounded-circle"
                    style="width: 60px; height: 60px; cursor: pointer;">
                <a class="nav-link" href="#">Username</a>
                <a href="" class="nav-link" style="color: blue">Atur Kegiatan</a>
            </div>

        </div>
    </div>
</nav>
