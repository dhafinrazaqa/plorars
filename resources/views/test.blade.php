<x-layout-user>
    <div class="test-heading d-flex align-items-center justify-content-center img-fluid"
        style="background-image: url('{{ asset('images/test_bg.jpg') }}'); background-size: cover; width: 100%; height: 500px;">
        <div class="container mb-5">
            <h1 class="text-center letter-spacing-2 fw-600 font-raleway fs-64px mb-5 text-white">
                Pilih <span class="fw-800">Tes</span> yang <span class="fw-800">Cocok</span> untuk Anda
            </h1>
        </div>
    </div>
    <div class="test-body">
        <div class="test-body-title text-center font-raleway fs-48px letter-spacing-2">
            <h1 class="fw-700" style="color: #212E50;">Take a step towards</h1>
            <h1 class="fw-800" style="color: #37ADBE;">understanding yourself better</h1>
        </div>
        <div class="container test-grid d-flex flex-column flex-md-row justify-content-center my-5 gap-5">
            <div
                class="test-card minat-bakat shadow rounded-5 bg-white p-4 d-flex flex-column w-100 md:w-50 align-items-center gap-4">
                <div class="test-image">
                    <img class="h-auto" style="width: 200px;" src="{{ asset('images/puzzle.png') }}" alt="">
                </div>
                <div class="test-content d-flex flex-column gap-3">
                    <div class="test-title d-flex align-items-center gap-3">
                        <img src="{{ asset('images/minat_bakat_line.jpg') }}" alt="">
                        <h1 class="fw-800 font-raleway fs-36px m-0 letter-spacing-2 text-black">Minat dan Bakat</h1>
                    </div>
                    <p class="font-poppins fs-6 text-black">
                        Tes ini membantu Anda mengidentifikasi minat dan bakat unik, membimbing Anda dalam memilih
                        karier atau kegiatan yang sesuai.
                    </p>
                </div>
                <a class="btn-link d-flex align-items-center justify-content-center" href="{{ url('minatBakat') }}">
                    <img src="{{ asset('images/minat_bakat_button.png') }}" alt="">
                </a>
            </div>
            <div
                class="test-card mbti shadow rounded-5 bg-white p-4 d-flex flex-column w-100 md:w-50 align-items-center gap-4">
                <div class="test-image">
                    <img class="h-auto" style="width: 200px;" src="{{ asset('images/magnifying_glass.png') }}"
                        alt="">
                </div>
                <div class="test-content d-flex flex-column gap-3">
                    <div class="test-title d-flex align-items-center gap-3">
                        <img src="{{ asset('images/mbti_line.jpg') }}" alt="">
                        <h1 class="fw-800 font-raleway fs-36px m-0 letter-spacing-2 text-black">MBTI</h1>
                    </div>
                    <p class="font-poppins fs-6 text-black">
                        Tes MBTI membantu Anda memahami kepribadian Anda, termasuk cara Anda berinteraksi dan membuat
                        keputusan.
                    </p>
                </div>
                <a class="btn-link d-flex align-items-center justify-content-center" href="{{ url('mbti') }}">
                    <img src="{{ asset('images/mbti_button.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</x-layout-user>
