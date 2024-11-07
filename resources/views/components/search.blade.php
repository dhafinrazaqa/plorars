<form action="" method="GET" class="d-flex gap-3 p-3 bg-white rounded-5 shadow">
    <div class="options d-flex flex-column gap-3">
        <div class="search-bar d-flex align-items-center gap-4 bg-white rounded-pill py-2 px-3"
            style="width: 480px; border: 1px solid #BFBFBF;">
            <img src="{{ asset('images/search_icon.png') }}" alt="">
            <input class="font-poppins letter-spacing-1 fs-6 fw-light border-0 outline-0 bg-transparent w-100"
                type="search" name="query" id="query" placeholder="Cari Kegiatan">
        </div>
        <div class="select d-flex gap-3">
            <div class="kategori d-flex align-items-center justify-content-between p-3 rounded-pill"
                style="width: 230px; background-color: #D9D9D9;">
                <select class="form-select bg-transparent border-0 p-0 w-100 font-poppins fs-6 fw-500 letter-spacing-1"
                    name="category" id="category">
                    <option value="Kategori">Kategori</option>
                    <option value="sg">Study Group</option>
                    <option value="ukm">UKM</option>
                </select>
                <img src="../images/arrow_down.png" alt="">
            </div>
            <div class="fakultas d-flex align-items-center justify-content-between p-3 rounded-pill"
                style="width: 230px; background-color: #D9D9D9;">
                <select class="form-select bg-transparent border-0 p-0 w-100 font-poppins fs-6 fw-500 letter-spacing-1"
                    name="fakultas" id="fakultas">
                    <option value="Fakultas">Fakultas</option>
                    <option value="FIK">FIK</option>
                    <option value="FKB">FKB</option>
                    <option value="FEB">FEB</option>
                    <option value="FIF">FIF</option>
                    <option value="FTE">FTE</option>
                    <option value="FRI">FRI</option>
                    <option value="FIT">FIT</option>
                </select>
                <img src="../images/arrow_down.png" alt="">
            </div>
        </div>
    </div>
    <div class="search-btn-container">
        <button
            class="search-btn d-flex align-items-center gap-3 button-gradient text-white p-4 px-5 border-0 font-raleway fw-600 rounded-5 h-100"
            style="font-size: 36px; cursor: pointer;"> Cari <img src="{{ asset('images/arrow_icon.png') }}"
                alt=""></button>
    </div>
</form>
