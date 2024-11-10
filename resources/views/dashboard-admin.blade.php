<style>
    label, input, select, textarea {
        color: #212E50;
        font-weight: 600;
        font-size: 18px;
        font-family: raleway, sans-serif,poppins;
        letter-spacing: 2px;
    }

</style>

<x-admin-layout>
    <div>
        <div class="container my-5 d-flex flex-column gap-3">
            <div class="d-flex flex-column gap-3 bg-white rounded-5 p-5 shadow">
                <h1 class="fw-600 fs-48px letter-spacing-2 
            text-center font-raleway font-poppins
            "
                    style="color: #212E50">Input Kegiatan</h1>
                <label>Kategori :
                    <select class="form-select form-select-sm rounded-2 mt-2" aria-label=".form-select-sm example">
                        <option value="sg">Study Group</option>
                        <option value="ukm">Unit Kegiatan Mahasiswa</option>
                    </select>
                </label>

                <label>Fakultas :
                    <select class="form-select form-select-sm rounded-2 mt-2" aria-label=".form-select-sm example">
                        <option value = "None">None</option>
                        <option value = "FIK">FIK</option>
                        <option value = "FKS">FKS</option>
                        <option value = "FEB">FEB</option>
                        <option value = "FIF">FIF</option>
                        <option value = "FIT">FIT</option>
                        <option value = "FTE">FTE</option>
                        <option value = "FRI">FRI</option>
                    </select>
                </label>

                <label>Nama Kegiatan :
                    <input type="text" class="form-control rounded-2 mt-2" placeholder="Masukkan Nama Kegiatan">
                </label>

                <label>Deskripsi Kegiatan :
                    <textarea type="text" class="form-control rounded-2 mt-2" placeholder="Masukkan Deskripsi Kegiatan"></textarea>
                </label>

                <label>Link Kegiatan :
                    <input type="text" class="form-control rounded-2 mt-2" placeholder="Masukkan Link Kegiatan">
                </label>

                <label>Gambar :
                    <input type="file" class="form-control rounded-2 mt-2" placeholder="Masukkan Gambar">
                </label>

                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit"
                        class="btn btn-primary mt-4 justify-content-center
                align-items-center"
                        style="width: 25%;">Submit</button>
                </div>

            </div>
        </div>
        <div class="container mb-5 d-flex flex-column gap-3 bg-white rounded-5 p-5 shadow">
            <h1 class="fw-600 fs-48px letter-spacing-2 m-5 text-center font-raleway font-poppins mt-2"
                style="color: #212E50">
                Daftar Kegiatan</h1>
            <div class="table-responsive">
                <table class="table table-bordered border-dark">
                    <thread>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Deskripsi Kegiatan</th>
                            <th scope="col">Link Kegiatan</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thread>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
