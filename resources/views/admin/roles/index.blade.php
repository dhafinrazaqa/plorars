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
            Role</h1>
        @can('role-create')
            <a href="{{ url('admin/roles/create') }}" class="btn btn-primary my-2">Tambah Role</a>
        @endcan
        <table class="table table-bordered table-striped table-hover font-raleway" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    {{-- <th scope="col">Permissions</th> --}}
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $item)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        {{-- <td>
                            @if ($roles->permissions->isNotEmpty())
                                <ul class="list-unstyled mb-0">
                                    @foreach ($roles->permissions as $permission)
                                        <li class="badge bg-success me-1 mb-1">{{ $permission->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">No permissions assigned</span>
                            @endif
                        </td> --}}
                        <td>
                            <a class="btn btn-primary" href="{{ url('admin/roles/' . $item->id) }}">Show</a>
                            @can('role-edit')
                                <a class="btn btn-warning" href="{{ url('admin/roles/' . $item->id . '/edit') }}">Ubah</a>
                            @endcan
                            @can('role-delete')
                                <form action="{{ url('admin/roles/' . $item->id) }}" method="POST" class="d-inline ms-1">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus?')">
                                        Hapus
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
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
</x-admin-layout>
