@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Users</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="mb-2 p-2">
                        <button class="btn btn-success"><i class="fa-solid fa-plus mr-1"></i>Add User</button>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>Nama</th>
                                <th>Email</th>
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
                                <tr>
                                    <div class="row">
                                        <td>{{ ++$index }}</td>
                                        <td class="col-xl-4">{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td class="col-xl-2">{{ $user->email }}</td>
                                        <td class="col-xl-3"><img src="" alt="" class="p-5"></td>
                                        {{-- {{ $user->password }} --}}
                                        <td class="col-xl-3">
                                            <div>
                                                <button type="button" class="btn btn-warning"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i> Edit</button> |
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i>
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
