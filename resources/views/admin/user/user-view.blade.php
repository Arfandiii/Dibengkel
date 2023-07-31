@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @error('firstName')
            <div class="alert alert-danger">
                Data yang dimasukan tidak valid !
            </div>
        @enderror

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pengguna</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Tabel Pengguna</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="mb-2 p-2">
                        <a href="/users/create" class="btn btn-success"><i class="fa-solid fa-plus mr-1"></i>Tambah
                            Pengguna</a>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Profile</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> --}}
                        <tbody>
                            @foreach ($dataUser as $index => $user)
                                <!-- Delete Modal-->
                                <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Anda yakin akan menghapus
                                                    pengguna ini?</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Pilih "Hapus" jika anda yakin untuk menghapus pengguna
                                                ini.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Batal</button>
                                                <form action="users/{{ $user->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Edit Modal-->
                                <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pengguna
                                                </h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="users/{{ $user->id }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <input type="text"
                                                        class="form-control form-control-user @error('firstName') is-invalid @enderror"
                                                        id="firstName" name="first_name" placeholder="Nama Depan" required
                                                        value="{{ $user->first_name, old('firstName') }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button class="btn btn-primary" type="submit">Ubah Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <tr>
                                    <div class="row">
                                        <td class="col-xl-0">{{ $loop->iteration }}</td>
                                        <td class="col-xl-2">{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td class="col-xl-3">{{ $user->email }}</td>
                                        <td class="col-xl-4">{{ $user->nomor_telepon }}</td>
                                        <td class="col-xl-1">
                                            @if ($user->image)
                                                <img src="{{ asset('storage/' . $user->image) }}"
                                                    alt="{{ $user->first_name }}" class=" rounded">
                                            @else
                                                <img src="{{ asset('assets/img/user.png') }}"
                                                    alt="{{ $user->first_name }}" class=" rounded">
                                            @endif
                                        </td>
                                        {{-- {{ $user->password }} --}}
                                        <td class="col-xl-3" style="height: 100px;">
                                            <div class="d-flex
                                            justify-content-between align-items-center"
                                                style="height: 100px;">
                                                <a class="btn
                                                btn-sm btn-warning mb-2"
                                                    href="/users/{{ $user->id }}/edit"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i> Edit</a>
                                                <span> | </span>
                                                <button class="btn btn-sm btn-danger mb-2" data-toggle="modal"
                                                    data-target="#deleteModal{{ $user->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                    Hapus</button>
                                            </div>
                                        </td>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
