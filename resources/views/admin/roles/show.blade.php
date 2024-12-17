<x-admin-layout>
    <div class="container-fluid shadow rounded-3" style="background-color: #212e50; width: 100%;">
        <h1 class="fw-700 fs-48px letter-spacing-3 item-center text-center font-raleway font-poppins
        m-0"
            style="color: white; padding-block: 80px">
            Selamat Datang, Admin!
        </h1>
    </div>

    <div class="container bg-white rounded-5 p-5 shadow my-5">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="col-md-12">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Kembali</a>
                    </div>
                    <div class="card-header bg-white">
                        <h1 class="fw-600 fs-48px letter-spacing-2 text-center font-raleway font-poppins"
                            style="color: #212E50">Detail
                            Role</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        value="{{ $role->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="permissions" class="form-label">Permissions</label>
                                    <div class="d-flex flex-wrap">
                                        @if (!empty($rolePermissions))
                                            @foreach ($rolePermissions as $v)
                                                <span class="badge bg-success me-2 mb-2">{{ $v->name }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
