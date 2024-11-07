<x-layout-user>
    <div class="heading d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('images/heading_bg.png') }}'); height: 525px; background-size: cover;">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center text-white fw-600 font-raleway fs-64px letter-spacing-2 w-75">Temukan <span
                    class="fw-800">Kegiatan</span> yang <span class="fw-800">Tepat</span> untukmu!</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="transform: translateY(-50%);">
        <x-search></x-search>
    </div>
    <div class="kegiatan d-flex flex-column gap-4" style="margin: 64px 128px;">
        <div class="kegiatan-grid d-grid gap-3 justify-content-evenly justify-items-center"
            style="grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));">
            <x-kegiatan-box></x-kegiatan-box>
            <x-kegiatan-box></x-kegiatan-box>
            <x-kegiatan-box></x-kegiatan-box>
            <x-kegiatan-box></x-kegiatan-box>
        </div>
    </div>
</x-layout-user>
