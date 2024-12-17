<x-admin-layout>
    <div class="container bg-white rounded-5 p-5 shadow my-5">
        <div class="row p-lg-3">
            <div class="col">
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <h1 class="fw-600 fs-48px letter-spacing-2 text-center font-raleway font-poppins"
                        style="color: #212E50">Edit
                        User</h1>
                    <div class="mb-3 font-raleway">
                        <label for="username" class="form-label fw-600 m-0">Username :</label>
                        <input type="text"
                            class="form-control rounded-2 mt-2 @error('username') is-invalid @enderror"
                            value="{{ $user->username }}" placeholder="Masukkan user" id="username" name="username">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="email" class="form-label fw-600 m-0">Email :</label>
                        <input type="email" class="form-control rounded-2 mt-2 @error('email') is-invalid @enderror"
                            value="{{ $user->email }}" placeholder="Masukkan email" id="email" name="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="password" class="form-label fw-600 m-0">Password :</label>
                        <input type="password"
                            class="form-control rounded-2 mt-2 @error('password') is-invalid @enderror"
                            placeholder="Masukkan password" id="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="confirm-password" class="form-label fw-600 m-0">Confirm Password :</label>
                        <input type="password"
                            class="form-control rounded-2 mt-2 @error('confirm-password') is-invalid @enderror"
                            placeholder="Masukkan konfirmasi password" id="confirm-password" name="confirm-password">
                        @error('confirm-password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 font-raleway">
                        <label for="roles" class="form-label fw-600 m-0">Role :</label>
                        <select name="roles[]" class="form-control rounded-2 mt-2 @error('roles') is-invalid @enderror"
                            multiple="multiple" id="roles">
                            @foreach ($roles as $value => $label)
                                <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('roles')
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
