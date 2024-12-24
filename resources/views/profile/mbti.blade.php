@section('mbti_type')
    {{ $jenisMBTI }}
@endsection

<x-layout-profile>
    <div class="kepribadian d-flex gap-3 justify-content-between p-3">
        <div class="jenis-kepribadian d-flex flex-column align-items-center gap-3 p-3" style="width: 30%">
            <div class="jenis-kepribadian-title d-flex flex-column align-items-center w-75 gap-1">
                <h1 class="fw-700 font-raleway fs-2 letter-spacing-1 m-0">
                    @yield('mbti_type')
                </h1>
                <span class="w-100" style="height: 2px; background-color: black"></span>
            </div>
            <img style="width: 200px" src="{{ $gambarMBTI }}" alt="">
        </div>
        <div class="stats d-flex flex-column gap-4 p-3" style="width: 70%">
            <div class="sifat-kepribadian d-flex flex-column w-75 gap-1">
                <h1 class="fw-700 font-raleway fs-2 letter-spacing-1 m-0">Sifat Kepribadian</h1>
                <span class="w-100" style="height: 2px; background-color: black"></span>
            </div>
            <div class="status-bar font-poppins d-flex flex-column gap-4">
                <div class="energy d-flex flex-column gap-1">
                    <p class="m-0">
                        Energy:
                        <span class="fw-700" style="color: #4751B4;">
                            {{ $jenisMBTIArray[0] === 'E' ? 'Extrovert' : 'Introvert' }}
                        </span>
                    </p>
                    <div class="energy-bar rounded-pill d-flex align-items-center {{ $jenisMBTIArray[0] === 'E' ? 'flex-row-reverse' : 'flex-row' }}"
                        style="background-color: #F5F5F5; height: 30px;">
                        <div class="energy-fill rounded-pill w-25 h-100"
                            style="background: linear-gradient(to right, #4751B4, #1E32FF);"></div>
                    </div>
                    <div class="energy-chart d-flex justify-content-between">
                        <p class="m-0">Introvert</p>
                        <p class="m-0">Extrovert</p>
                    </div>
                </div>
                <div class="pola-pikir d-flex flex-column gap-1">
                    <p class="m-0">Pola Pikir: <span class="fw-700"
                            style="color: #CCB04F;">{{ $jenisMBTIArray[1] === 'S' ? 'Sensing' : 'Intuition' }}</span>
                    </p>
                    <div class="pola-pikir-bar rounded-pill d-flex align-items-center {{ $jenisMBTIArray[1] === 'N' ? 'flex-row-reverse' : 'flex-row' }}"
                        style="background-color: #F5F5F5; height: 30px;">
                        <div class="pola-pikir-fill rounded-pill w-25 h-100"
                            style="background: linear-gradient(to right, #CCB04F, #FFCB17);"></div>
                    </div>
                    <div class="pola-pikir-chart d-flex justify-content-between">
                        <p class="m-0">Sensing</p>
                        <p class="m-0">Intuition</p>
                    </div>
                </div>
                <div class="sifat d-flex flex-column gap-1">
                    <p class="m-0">Sifat: <span class="fw-700"
                            style="color: #2A7343;">{{ $jenisMBTIArray[2] === 'F' ? 'Feeling' : 'Thinking' }}</span></p>
                    <div class="sifat-bar rounded-pill d-flex align-items-center {{ $jenisMBTIArray[2] === 'T' ? 'flex-row-reverse' : 'flex-row' }}"
                        style="background-color: #F5F5F5; height: 30px;">
                        <div class="sifat-fill rounded-pill w-25 h-100"
                            style="background: linear-gradient(to right, #2A7343, #00F253);"></div>
                    </div>
                    <div class="sifat-chart d-flex justify-content-between">
                        <p class="m-0">Feeling</p>
                        <p class="m-0">Thinking</p>
                    </div>
                </div>
                <div class="taktik d-flex flex-column gap-1">
                    <p class="m-0">Taktik: <span class="fw-700"
                            style="color: #9A2FA3;">{{ $jenisMBTIArray[3] === 'J' ? 'Judging' : 'Perceiving' }}</span>
                    </p>
                    <div class="taktik-bar rounded-pill d-flex align-items-center {{ $jenisMBTIArray[3] === 'P' ? 'flex-row-reverse' : 'flex-row' }}"
                        style="background-color: #F5F5F5; height: 30px;">
                        <div class="taktik-fill rounded-pill w-25 h-100"
                            style="background: linear-gradient(to right, #9A2FA3, #EC06FF);"></div>
                    </div>
                    <div class="taktik-chart d-flex justify-content-between">
                        <p class="m-0">Judging</p>
                        <p class="m-0">Perceiving</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-profile>
{{-- // --}}
