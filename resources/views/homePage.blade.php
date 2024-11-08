<x-layout-home>
    <div class="container-fluid p-0" style="height: 200vh;">
        <div class="d-flex justify-content-center align-items-center">
            <div class="position-relative w-100 h-50">
                <img src="{{ asset('images/Eclips.png') }}" alt="Welcome To Plorars !!"
                    class="img-fluid w-100 h-100 object-fit-cover">
                <h1
                    class="position-absolute top-50 start-50 translate-middle text-center font-raleyway text-white letter-spacing-2 fw-700 fs-64px">
                    Welcome, {{-- {{ auth()->user()->name }} --}}Dummy!!
                </h1>
            </div>
        </div>
        <div class="position-relative m-5 p-5">
            <div class ="d-flex position-absolute gap-3 m-3" style="left: 84px;">
                <img src="{{ asset('images/lineBlue.png') }}">
                <h1 class = "font-raleway letter-spacing-2 fw-800 m-3">Discover</h1>
            </div>
        </div>
        <div class="position-relative m-5 p-5" style="top:30px;">
            <div class ="d-flex justify-content-center align-items-center ">
                <input type="text"
                    class="form-control form-control-lg justify-content-center align-items-center ps-5 pt-2 fw-400 font-poppins"
                    placeholder="Cari Kegiatan"
                    style="border-radius:25px; 
                    background-image: url('{{ asset('images/search.png') }}'); 
                    background-repeat: no-repeat; 
                    background-position: 10px center; 
                    width:auto; 
                    width:95%;">
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="d-flex align-items-center flex-line gap-5 position-relative" style="top: -40px;">
                <a href="{{-- {{ route('search')}} --}}" style="text-decoration:none">
                    <div class="d-flex gap-5 p-5" style="background-color: #4874B6; border-radius: 25px">
                        <span>📚</span>
                        <span class="text-white fw-800 font-raleway font-size-24" style="font-size: 20px;">Study Group</span>
                    </div>
                </a>
                <a href="{{-- {{ route('search')}} --}}" style="text-decoration:none">
                    <div class="d-flex gap-5 p-5" style="background-color: #37ADBE; border-radius: 25px; widht:100%;">
                        <span>🎉</span>
                        <span class="text-white fw-800 font-raleway" style="font-size: 20px;">Unit Kegiatan Mahasiswa</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="position-relative m-5 p-5">
            <div class ="d-flex position-absolute gap-3 m-3" style="left: 84px;">
                <img src="{{ asset('images/lineBlue.png') }}">
                <h1 class = "font-raleway letter-spacing-2 fw-800 m-3">Test</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <img  src="{{ asset('images/Banner.jpg') }}" class="m-5" style=" width: 85%;">
        </div>
    </div>
</x-layout-home>
