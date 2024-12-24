<x-admin-layout>
    <div class="container bg-white rounded-5 p-5 shadow my-5">
        <div class="row p-lg-3">
            <div class="col">
                <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data"
                    onsubmit="console.log('Form submitted');">
                    @method('PUT')
                    @csrf
                    <h1 class="fw-600 fs-48px letter-spacing-2 text-center font-raleway font-poppins"
                        style="color: #212E50">Edit
                        Kegiatan</h1>
                    <div class="mb-3 font-raleway">
                        <label for="judul" class="form-label fw-600 m-0">Nama Kegiatan :</label>
                        <input type="text" class="form-control rounded-2 mt-2 @error('judul') is-invalid @enderror"
                            value="{{ $kegiatan->judul }}" placeholder="Masukkan judul Kegiatan" id="judul"
                            name="judul" oninput="console.log('Judul changed:', this.value);">
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label class="form-label fw-600 m-0" for="kategori">Kategori :</label>
                        <select
                            class="form-select form-select-md rounded-2 mt-2 @error('kategori') is-invalid @enderror"
                            id="kategori" name="kategori" onchange="console.log('Kategori selected:', this.value);">
                            <option value="" selected>Pilih Kategori</option>
                            <option value="Study Group" {{ $kegiatan->kategori == 'Study Group' ? 'selected' : '' }}>
                                Study Group</option>
                            <option value="Unit Kegiatan Mahasiswa"
                                {{ $kegiatan->kategori == 'Unit Kegiatan Mahasiswa' ? 'selected' : '' }}>Unit Kegiatan
                                Mahasiswa</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label class="form-label fw-600 m-0" for="fakultas">Fakultas :</label>
                        <select
                            class="form-select form-select-md rounded-2 mt-2 @error('fakultas') is-invalid @enderror"
                            id="fakultas" name="fakultas" onchange="console.log('Fakultas selected:', this.value);">
                            <option value="" selected>Pilih Fakultas</option>
                            <option value="None" {{ $kegiatan->fakultas == 'None' ? 'selected' : '' }}>None</option>
                            <option value="FIK" {{ $kegiatan->fakultas == 'FIK' ? 'selected' : '' }}>FIK</option>
                            <option value="FKS" {{ $kegiatan->fakultas == 'FKS' ? 'selected' : '' }}>FKS</option>
                            <option value="FEB" {{ $kegiatan->fakultas == 'FEB' ? 'selected' : '' }}>FEB</option>
                            <option value="FIF" {{ $kegiatan->fakultas == 'FIF' ? 'selected' : '' }}>FIF</option>
                            <option value="FIT" {{ $kegiatan->fakultas == 'FIT' ? 'selected' : '' }}>FIT</option>
                            <option value="FTE" {{ $kegiatan->fakultas == 'FTE' ? 'selected' : '' }}>FTE</option>
                            <option value="FRI" {{ $kegiatan->fakultas == 'FRI' ? 'selected' : '' }}>FRI</option>
                        </select>
                        @error('fakultas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="deskripsi" class="form-label fw-600 m-0">Deskripsi Kegiatan :</label>
                        <textarea class="form-control rounded-2 mt-2 @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                            placeholder="Masukkan Deskripsi Kegiatan" oninput="console.log('Deskripsi changed:', this.value);">{{ $kegiatan->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="link" class="form-label fw-600 m-0">Link Kegiatan :</label>
                        <input type="text" class="form-control rounded-2 mt-2 @error('link') is-invalid @enderror"
                            value="{{ $kegiatan->link }}" id="link" name="link"
                            placeholder="Masukkan Link Kegiatan" oninput="console.log('Link changed:', this.value);">
                        @error('link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="mbti_type" class="form-label fw-600 m-0">MBTI Type :</label>
                        <input type="text"
                            class="form-control rounded-2 mt-2 @error('mbti_type') is-invalid @enderror"
                            value="{{ $kegiatan->mbti_type }}" id="mbti_type" name="mbti_type"
                            placeholder="Masukkan MBTI Type (e.g., ENTJ)"
                            oninput="console.log('MBTI Type changed:', this.value);">
                        @error('mbti_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="gambar" class="form-label fw-600 m-0">Gambar :</label>

                        @if ($kegiatan->gambar)
                            <img src="{{ asset("storage/$kegiatan->gambar") }}"
                                class="img-preview img-fluid mb-3 d-block" width="250px" alt="Current Image">
                        @else
                            <img class="img-preview img-fluid mb-3" width="250px" alt="No Current Image">
                        @endif

                        <input type="hidden" name="old_image" value="{{ $kegiatan->gambar }}">
                        <input type="file" class="form-control rounded-2 mt-2 @error('gambar') is-invalid @enderror"
                            id="gambar" name="gambar" placeholder="Masukkan Gambar"
                            onchange="previewImage(); console.log('Gambar file selected:', this.files[0]);">
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
