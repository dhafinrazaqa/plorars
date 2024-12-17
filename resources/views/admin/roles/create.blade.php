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
                <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="fw-600 fs-48px letter-spacing-2 text-center font-raleway font-poppins"
                        style="color: #212E50">Input
                        Role</h1>
                    <div class="mb-3 font-raleway">
                        <label for="name" class="form-label fw-600 m-0">Name :</label>
                        <input type="text" class="form-control rounded-2 mt-2 @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="Masukkan name" id="name" name="name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="permission" class="form-label fw-600 m-0">Permission :</label>
                        <div class="form-control mt-2 @error('permission') is-invalid @enderror">
                            @foreach ($permission as $value)
                                <div>
                                    <label>
                                        <input type="checkbox" name="permission[{{ $value->id }}]"
                                            value="{{ $value->id }}" class="name">
                                        {{ $value->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @error('permission')
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
</x-admin-layout>
