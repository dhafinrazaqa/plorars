<x-layout>
    <div class="welcome" style="background-image: url({{ asset('images/welcome_bg.jpg') }})" id="home">
        <div class="container d-flex justify-content-between align-items-center bg-cover position-relative"
            style="height: 720px;">
            <div class="welcome-text d-flex flex-column align-items-start gap-3" style="width: 616px;">
                <p class="text-body letter-spacing-3 highlight-color fs-6">
                    EXPLORE EXTRACURRICULARS
                </p>
                <h1 class="letter-spacing-2 fw-800 font-raleway fs-64px">
                    Selamat Datang di
                    <span class="letter-spacing-2 highlight-color fs-64px">Plorars!</span>
                </h1>
                <p class="fw-400 font-poppins fs-6">Temukan kegiatan ekstrakurikuler atau aktivitas lainnya yang sesuai
                    dengan minat dan kepribadian Anda!</p>
                <a href="#"
                    class="d-flex align-items-center gap-3 text-white px-4 py-3 font-raleway button-gradient fw-600 fs-4 rounded-5"
                    style="border: none; text-decoration: none;">
                    Mulai Sekarang
                    <img src="{{ asset('images/arrow_icon.png') }}" alt="">
                </a>
            </div>
            <img class="img-fluid" src="{{ asset('images/plorars3d.png') }}" alt=""
                style="width: 360px; height: 500px;">
        </div>
    </div>
    <div class="explore d-flex flex-column align-items-center gap-4 text-center my-5 container" id="explore">
        <div class="explore-desc d-flex flex-column align-items-center">
            <h1 class="fw-800 fs-64px font-raleway letter-spacing-2">Temukan Dirimu</h1>
            <p class="fw-400 font-poppins fs-6 text-center w-75">Plorars akan memberikan rekomendasi kegiatan
                berdasarkan hasil tes
                dan minat yang telah kamu identifikasi. Dengan informasi tentang kegiatan, termasuk persyaratan dan
                tanggal buka, kamu dapat memilih kegiatan yang sesuai dengan minatmu</p>
        </div>
        <div class="explore-grid d-flex flex-wrap justify-content-center gap-4">
            <div class="minat-bakat">
                <div class="minat-bakat-box d-flex justify-content-center align-items-center mb-4 rounded-5"
                    style="height: 320px; transition: transform 0.2s ease-in-out; background-color: #4874B6;">
                    <img src="{{ asset('images/puzzle.png') }}" alt="">
                </div>
                <p class="fw-600 font-raleway fs-4">Tes Minat Bakat</p>
            </div>
            <div class="mbti">
                <div class="mbti-box d-flex justify-content-center align-items-center mb-4 rounded-5"
                    style="height: 320px; transition: transform 0.2s ease-in-out; background-color: #37ADBE;">
                    <img src="{{ asset('images/magnifying_glass.png') }}" alt="">
                </div>
                <p class="fw-600 font-raleway fs-4">Tes MBTI</p>
            </div>
            <div class="rekomendasi">
                <div class="rekomendasi-box d-flex justify-content-center align-items-center mb-4 rounded-5"
                    style="height: 320px; transition: transform 0.2s ease-in-out; background-color: #384462;">
                    <img src="{{ asset('images/compass.png') }}" alt="">
                </div>
                <p class="fw-600 font-raleway fs-4">Rekomendasi Kegiatan</p>
            </div>
        </div>
    </div>
    <div class="why d-flex align-items-center justify-content-center gap-4 my-5 container" id="why">
        <h1 class="text-center letter-spacing-2 fw-800 font-raleway fs-48px">Mengapa Memilih
            <span class="highlight-color">Plorars?</span>
        </h1>
        <div class="reasons d-flex flex-column gap-3">
            <div class="reason-1 font-raleway fs-4 fw-600 text-white p-4 rounded-5 button-gradient"
                style="width: 489px; transition: transform 0.2s ease-in-out;">Temukan kegiatan yang sesuai dengan minat
                dan jadwal Anda.</div>
            <div class="reason-1 font-raleway fs-4 fw-600 text-white p-4 rounded-5 button-gradient"
                style="width: 489px; transition: transform 0.2s ease-in-out;">Tingkatkan keterampilan dan bakat Anda di
                luar jurusan.</div>
            <div class="reason-1 font-raleway fs-4 fw-600 text-white p-4 rounded-5 button-gradient"
                style="width: 489px; transition: transform 0.2s ease-in-out;">Jelajahi peluang baru dan temukan
                komunitas yang mendukung.</div>
        </div>
    </div>
    <div class="join" id="join"
        style="background-color: #B5D5E2; border-top-left-radius: 50px; border-top-right-radius: 50px; padding-block: 128px">
        <div class="container d-flex flex-column align-items-center gap-4">
            <h1 class="text-center letter-spacing-2 fw-800 font-raleway fs-64px">Unlock your <span
                    class="highlight-color">Hidden Talent</span></h1>
            <p class="fw-400 font-poppins fs-6 text-center w-75 text-center">Bergabunglah untuk mengembangkan diri
                secara pribadi dan profesional. Jadilah bagian dari komunitas yang peduli dengan pertumbuhan dan
                eksplorasi. Mulailah perjalanan pengembangan diri Anda sekarang dengan Plorars. Daftar sekarang untuk
                mengambil tes dan temukan potensimu!</p>
            <a href="#"
                class="d-flex align-items-center gap-3 text-white px-4 py-3 font-raleway button-gradient fw-600 fs-4 rounded-5"
                style="border: none; text-decoration: none;">
                Daftar Sekarang
                <img src="{{ asset('images/arrow_icon.png') }}" alt="">
            </a>
        </div>
    </div>
</x-layout>
