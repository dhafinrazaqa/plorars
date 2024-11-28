<x-admin-layout>
    <div class="container-fluid shadow rounded-3" style="background-color: #212e50; width: 100%;">
        <h1 class="fw-700 fs-48px letter-spacing-3 item-center text-center font-raleway font-poppins
        m-0"
            style="color: white; padding-block: 80px">
            Selamat Datang, Admin!
        </h1>
    </div>

    <div class="container bg-white rounded-5 p-5 shadow my-5">
        <h1 class="fw-600 fs-48px letter-spacing-2 text-center font-raleway font-poppins" style="color: #212E50">List
            Kegiatan</h1>
        <a href="{{ url('admin/kegiatan/create') }}" class="btn btn-primary my-2">Tambah Kegiatan</a>
        <table class="table table-bordered table-striped table-hover font-raleway" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Deskripsi Kegiatan</th>
                    <th scope="col">Link Kegiatan</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kegiatans as $item)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->fakultas }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->link }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" width="100">
                        </td>
                        <td>
                            <a class="btn btn-warning"
                                href="{{ url('admin/kegiatan/' . $item->id . '/edit') }}">Ubah</a>
                            <form action="{{ url('admin/kegiatan/' . $item->id) }}" method="POST"
                                class="d-inline ms-1">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        @if (session('success'))
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses!',
                                text: '{{ session('success') }}',
                                timer: 3000,
                                showConfirmButton: false
                            });
                        @elseif (session('error'))
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: '{{ session('error') }}',
                                timer: 3000,
                                showConfirmButton: false
                            });
                        @endif
                    });
                </script>
                
            </tbody>
        </table>
    </div>
    {{-- <div>
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
    </div> --}}
</x-admin-layout>
