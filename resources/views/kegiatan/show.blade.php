<x-layout-user>
    <div class="container my-5 font-roboto letter-spacing-1">
        <div class="card shadow rounded-5 bg-white p-5 d-flex flex-column gap-5">
            <div class="detail-head d-flex gap-5">
                <img class="detail-logo img-fluid rounded-4" src="{{ asset('storage/' . $kegiatan->gambar) }}"
                    alt="Logo" style="width: 250px; height: 250px;">
                <div class="detail-head-right d-flex flex-column gap-3">
                    <div class="title">
                        <h3 class="fw-bold fs-2 letter-spacing-1" style="color: #212E50">{{ $kegiatan->judul }}</h3>
                    </div>
                    <div class="subtitle">
                        <p>At Faculty: {{ $kegiatan->fakultas }}</p>
                        <p>Link: <a href="{{ $kegiatan->link }}" target="_blank">{{ $kegiatan->link }}</a></p>
                    </div>
                </div>
            </div>
            <div class="detail-body d-flex flex-column gap-3">
                <h4 class="fw-bold fs-2 letter-spacing-1" style="color: #212E50">Description</h4>
                <p>{{ $kegiatan->deskripsi }}</p>
            </div>
        </div>
    </div>
</x-layout-user>
