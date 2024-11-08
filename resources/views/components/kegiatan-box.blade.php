<div class="kegiatan-box w-100 rounded-5 bg-transparent"
    style="height: 450px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.25); transition: transform 0.2s ease-in-out;">
    <div class="kegiatan-top bg-light w-100 d-flex justify-content-center overflow-hidden"
        style="height: 225px; border-top-left-radius: 25px; border-top-right-radius: 25px;">
        <img class="w-100" style="height: max-content; filter: brightness(90%);"
            src="{{ asset('images/placeholder_kegiatan.jpg') }}" alt="">
    </div>
    <div class="kegiatan-bottom w-100 d-flex flex-column gap-3 p-4 bg-white"
        style="height: 225px; border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">
        <p class="kegiatan-kategori fw-medium font-poppins letter-spacing-1 m-0"
            style="font-size: 12px; color: #b3b3b3;">
            Study
            Group</p>
        <div class="kegiatan-judul d-flex align-items-center gap-3">
            <img class="w-auto" style="width: 28px;" src="{{ asset('images/kegiatan_logo.png') }}" alt="">
            <h1 class="fw-bold text-dark font-raleway letter-spacing-1 fs-4 m-0" style="color: #212E50;">
                Sample Event Title</h1>
        </div>
        <p class="kegiatan-desc fw-medium text-muted text-truncate font-poppins letter-spacing-1 m-0 overflow-hidden fw-500"
            style="font-size: 12px;">
            Sample event description goes here.</p>
        <div class="selengkapnya d-flex align-items-center ms-auto mt-auto gap-2">
            <a href="details.php?id=1" class="text-decoration-none text-primary fw-medium font-poppins"
                style="font-size: 12px; color: #37ADBE;">Selengkapnya</a>
            <img src="{{ asset('images/selengkapnya_arrow.png') }}" alt="" style="width: 12px; height: 12px;">
        </div>
    </div>
</div>
