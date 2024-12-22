<x-admin-layout>
    <div class="container bg-white rounded-5 p-5 shadow my-5">
        <div class="row p-lg-3">
            <div class="col">
                @if ($errors->any())
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: `
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
                        });
                    </script>
                @endif
                <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="fw-600 fs-48px letter-spacing-2 text-center font-raleway font-poppins"
                        style="color: #212E50">Input
                        Kegiatan</h1>
                    <div class="mb-3 font-raleway">
                        <label for="judul" class="form-label fw-600 m-0">Nama Kegiatan :</label>
                        <input type="text" class="form-control rounded-2 mt-2 @error('judul') is-invalid @enderror"
                            value="{{ old('judul') }}" placeholder="Masukkan judul Kegiatan" id="judul"
                            name="judul">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label class="form-label fw-600 m-0" for="kategori">Kategori :</label>
                        <select
                            class="form-select form-select-md rounded-2 mt-2 @error('kategori') is-invalid @enderror"
                            id="kategori" name="kategori">
                            <option value="" selected>Pilih Kategori</option>
                            <option value="Study Group">Study Group</option>
                            <option value="Unit Kegiatan Mahasiswa">Unit Kegiatan Mahasiswa</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label class="form-label fw-600 m-0" for="fakultas">Fakultas :</label>
                        <select
                            class="form-select form-select-md rounded-2 mt-2 @error('fakultas') is-invalid @enderror"
                            id="fakultas" name="fakultas">
                            <option value="" selected>Pilih Fakultas</option>
                            <option value="None">None</option>
                            <option value="FIK">FIK</option>
                            <option value="FKS">FKS</option>
                            <option value="FEB">FEB</option>
                            <option value="FIF">FIF</option>
                            <option value="FIT">FIT</option>
                            <option value="FTE">FTE</option>
                            <option value="FRI">FRI</option>
                        </select>
                        @error('fakultas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="deskripsi" class="form-label fw-600 m-0">Deskripsi Kegiatan :</label>
                        <textarea class="form-control rounded-2 mt-2 @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                            placeholder="Masukkan Deskripsi Kegiatan">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="link" class="form-label fw-600 m-0">Link Kegiatan :</label>
                        <input type="text" class="form-control rounded-2 mt-2 @error('link') is-invalid @enderror"
                            value="{{ old('link') }}" id="link" name="link"
                            placeholder="Masukkan Link Kegiatan">
                        @error('link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="gambar" class="form-label fw-600 m-0">Gambar :</label>
                        <img class="img-preview img-fluid mb-3" width="250px">
                        <input type="file" class="form-control rounded-2 mt-2 @error('gambar') is-invalid @enderror"
                            id="gambar" name="gambar" placeholder="Masukkan Gambar" onchange="previewImage()">
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center align-items-center font-raleway">
                        <button type="submit" class="btn btn-primary mt-4" style="width: 25%;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</x-admin-layout>
