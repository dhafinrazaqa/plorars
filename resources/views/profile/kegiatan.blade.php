@section('mbti_type')
    {{ $jenisMBTI }}
@endsection

<x-layout-profile>
    <div class="rekomendasi p-4 d-flex flex-column gap-4">
        <div class="rekomendasi-title d-flex flex-column w-50 gap-1">
            <h1 class="fw-700 font-raleway fs-2 letter-spacing-1 m-0">Rekomendasi Kegiatan</h1>
            <span class="w-100" style="height: 2px; background-color: black"></span>
        </div>
        @foreach ($kegiatans as $item)
            <div class="kegiatan d-flex flex-column gap-3">
                <h1 class="fw-700 font-raleway fs-2 letter-spacing-1 m-0">Kegiatan {{ $loop->iteration }}</h1>
                <div class="kegiatan-body d-flex gap-3 align-items-center">
                    <a href="{{ route('kegiatan.show', $item->id) }}">
                        <img class="rounded-5" src="{{ asset('storage/' . $item->gambar) }}" alt=""
                            style="width: 128px; height: 128px">
                    </a>
                    <p class="fw-400 font-poppins fs-5">Setelah melihat hasil tes kamu, kami
                        merekomendasikan kamu untuk mengikuti <span class="fw-700">{{ $item->judul }}</span> </p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout-profile>
{{-- // --}}
