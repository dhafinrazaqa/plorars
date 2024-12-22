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
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('search') ? 'active' : '' }}"
                        href="{{ url('search') }}">DISCOVER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('test') ? 'active' : '' }}" href="{{ url('test') }}">TEST</a>
                </li>
            </ul>
            <div class="profile d-flex align-items-center gap-4 flex-row-reverse ms-auto letter-spacing-2">
                <div class="dropdown">
                    <img src="{{ asset('images/profile_icon.png') }}" alt=""
                        class="rounded-circle dropdown-toggle" style="width: 60px; height: 60px; cursor: pointer;"
                        id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="{{ url('profile/mbti') }}">Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <a class="nav-link" href="#">{{ Auth::user()->username }}</a>
                @role('Admin')
                    <a href="{{ url('admin/kegiatan') }}" class="nav-link" style="color: blue">Atur Kegiatan</a>
                @endrole
            </div>
        </div>
    </div>
</nav>
