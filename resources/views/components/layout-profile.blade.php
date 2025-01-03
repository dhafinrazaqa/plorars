<x-layout-user>
    <div class="profile-header" style="background-color: #384462">
        <div class="text-header container">
            <h1 class="text-end text-white fw-600 font-raleway fs-2 letter-spacing-2 py-5 m-0 me-5">
                Hello {{ Auth::user()->username }}, this is your profile!
            </h1>
        </div>

    </div>
    <div class="profile-body container d-flex ">
        <div class="profile-sidebar px-4 pb-5" style="background-color: #DFEDF2; width: 30%;">
            <div class="pfp d-flex flex-column align-items-center gap-3" style="transform: translateY(-25%);">
                <img src="{{ asset('images/pfp.png') }}" alt="" style="width: 250px;">
                <div class="name d-flex flex-column align-items-center">
                    <h1 class="fw-800 font-raleway fs-2 letter-spacing-2">{{ Auth::user()->username }}</h1>
                    <div class="role rounded-pill" style="background-color: #A6EFA9">
                        <p class="fw-400 font-poppins fs-6 letter-spacing-2 px-3 py-1 m-0" style="color: #266025">
                            {{ Auth::user()->getRoleNames()->first() ?? 'User' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="bio d-flex flex-column gap-3">
                <div class="email d-flex flex-column gap-1 p-3 rounded-4" style="background-color: #F5F5F5">
                    <p class="fw-600 font-raleway fs-12 letter-spacing-2 m-0 text-muted">Email</p>
                    <h1 class="fw-700 font-raleway fs-6 letter-spacing-2 m-0">{{ Auth::user()->email }}</h1>
                </div>
                <div class="kepribadian d-flex flex-column gap-1 p-3 rounded-4" style="background-color: #F5F5F5">
                    <p class="fw-600 font-raleway fs-12 letter-spacing-2 m-0 text-muted">Kepribadian</p>
                    <h1 class="fw-700 font-raleway fs-6 letter-spacing-2 m-0">@yield('mbti_type')</h1>
                </div>
            </div>
        </div>
        <div class="profile-content bg-white" style="width: 70%;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-1">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav gap-4">
                            <li class="nav-item">
                                <a class="nav-link font-poppins {{ request()->is('profile/mbti') ? 'active' : '' }}"
                                    href="{{ url('profile/mbti') }}"
                                    aria-current="{{ request()->is('profile/mbti') ? 'page' : '' }}">Jenis
                                    Kepribadian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-poppins {{ request()->is('profile/minat-bakat') ? 'active' : '' }}"
                                    href="{{ url('profile/minat-bakat') }}"
                                    aria-current="{{ request()->is('profile/minat-bakat') ? 'page' : '' }}">Minat
                                    Bakat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-poppins {{ request()->is('profile/kegiatan') ? 'active' : '' }}"
                                    href="{{ url('profile/kegiatan') }}"
                                    aria-current="{{ request()->is('profile/kegiatan') ? 'page' : '' }}">Kegiatan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{ $slot }}
        </div>
    </div>
</x-layout-user>
{{--  --}}
