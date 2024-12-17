<x-admin-layout>
    <div class="container bg-white rounded-5 p-5 shadow my-5">
        <div class="row p-lg-3">
            <div class="col">
                <form action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <h1 class="fw-600 fs-48px letter-spacing-2 text-center font-raleway font-poppins"
                        style="color: #212E50">Edit
                        Role</h1>
                    <div class="mb-3 font-raleway">
                        <label for="name" class="form-label fw-600 m-0">Name :</label>
                        <input type="text" class="form-control rounded-2 mt-2 @error('name') is-invalid @enderror"
                            value="{{ $role->name }}" placeholder="Masukkan role" id="name" name="name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label class="form-label fw-600 m-0">Permission:</label>
                        <div class="mt-2">
                            @foreach ($permission as $value)
                                <div class="form-check">
                                    <input type="checkbox"
                                        class="form-check-input @error('permission') is-invalid @enderror"
                                        name="permission[{{ $value->id }}]" value="{{ $value->id }}"
                                        id="permission-{{ $value->id }}"
                                        {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="permission-{{ $value->id }}">
                                        {{ $value->name }}
                                    </label>
                                </div>
                            @endforeach
                            @error('permission')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center font-raleway">
                        <button type="submit" class="btn btn-primary mt-4" style="width: 25%;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
