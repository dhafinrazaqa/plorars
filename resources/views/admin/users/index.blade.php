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
            User</h1>
        <a href="{{ url('admin/users/create') }}" class="btn btn-primary my-2">Tambah User</a>
        <table class="table table-bordered table-striped table-hover font-raleway" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if (!empty($item->getRoleNames()))
                                @foreach ($item->getRoleNames() as $v)
                                    <label class="badge bg-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('admin/users/' . $item->id . '/edit') }}">Ubah</a>
                            <form action="{{ url('admin/users/' . $item->id) }}" method="POST" class="d-inline ms-1">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
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
