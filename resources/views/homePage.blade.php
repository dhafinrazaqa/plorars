<style>
    .study-group {
        background-color: #4874B6;
    }

    .ukm {
        background-color: #37ADBE;
    }

    .responsive-text {
        font-size: clamp(18px, 4vw, 64px);
    }

    @media (max-width: 768px) {
        .responsive-text {
            font-size: 35px;
        }

        .searching {
            width: 85% !important;
        }

        .ukm-box {
            width: 95% !important;
        }

        .study-group-box {
            width: 95% !important;
        }

        .kegiatan-grid .col {
            margin-bottom: 25px;
        }

        .img-banner {
            width: 65% !important;
        }
    }

    @media (max-width: 576px) {
        .responsive-text {
            font-size: 26px;
        }
    }

    .kegiatan-grid .col {
        margin-bottom: 45px;
    }
</style>

<x-layout-user>
    <div class="container-fluid p-0" style="min-height: 100vh;">
        <div class="d-flex justify-content-center align-items-center">
            <div class="position-relative w-100 h-50">
                <img src="{{ asset('images/Eclips.png') }}" alt="Welcome To Plorars !!"
                    class="img-fluid w-100 h-100 object-fit-cover">
                <h1
                    class="position-absolute top-50 start-50 translate-middle 
                    text-center font-raleyway text-white letter-spacing-2 fw-700
                    responsive-text">
                    Welcome, {{-- {{ auth()->user()->name }} --}}Dummy!!
                </h1>
            </div>
        </div>

        <div class="position-relative m-5 p-5">
            <div class="d-flex position-absolute gap-3 m-3" style="left: 84px;">
                <img src="{{ asset('images/lineBlue.png') }}">
                <h1 class="font-raleway letter-spacing-2 fw-800 m-3">Discover</h1>
            </div>
        </div>

        <div class="position-relative m-5 p-5" style="top:30px;">
            <div class="d-flex justify-content-center align-items-center">
                <input type="text" class="searching form-control form-control-lg ps-5 pt-2 fw-400 font-poppins"
                    placeholder="Cari Kegiatan"
                    style="border-radius:25px; background-image: url('{{ asset('images/search.png') }}'); 
                    background-repeat: no-repeat; background-position: 10px center; width: 95%;">
            </div>
        </div>

        <div class="container my-4">
            <div class="row justify-content-center gap-5">
                <div class="col-md-5 study-group-box">
                    <a href="{{-- {{ route('search', ['category' => 'sg']) }} --}}" class="text-decoration-none">
                        <div class="study-group d-flex align-items-center justify-content-center p-4 rounded-4">
                            <span class="fs-1 me-2">📚</span>
                            <span class="text-white fw-bold fs-5">Study Group</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-5 ukm-box">
                    <a href="{{-- {{ route('search', ['category' => 'ukm']) }} --}}" class="text-decoration-none">
                        <div class="ukm d-flex align-items-center justify-content-center p-4 rounded-4">
                            <span class="fs-1 me-2">🎉</span>
                            <span class="text-white fw-bold fs-5">Unit Kegiatan Mahasiswa</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="position-relative m-5 p-5">
            <div class="d-flex position-absolute gap-3 m-3" style="left: 84px;">
                <img src="{{ asset('images/lineBlue.png') }}" />
                <h1 class="font-raleway letter-spacing-2 fw-800 m-3">Test</h1>
            </div>
        </div>

        <a href="{{ url('test') }}" class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/Banner.jpg') }}" class="m-5 img-banner" style="width: 85%;">
        </a>

        <div class="position-relative m-5 p-5">
            <div class="d-flex position-absolute gap-3 m-3" style="left: 84px;">
                <img src="{{ asset('images/lineBlue.png') }}" />
                <h1 class="font-raleway letter-spacing-2 fw-800 m-3">Semua Kegiatan</h1>
            </div>
        </div>

        <div class="kegiatan d-flex flex-column" style="margin: 44px 96px; ">
            <div class="kegiatan-grid d-grid gap-3 m-5 justify-content-evenly 
            justify-items-center "
                style="grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));">
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
                <div class="col">
                    <x-kegiatan-box></x-kegiatan-box>
                </div>
            </div>
        </div>
    </div>
</x-layout-user>

