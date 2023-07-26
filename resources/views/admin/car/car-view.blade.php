@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Cars</h1>

        <!-- DataTales Example -->
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Merek Mobil</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="mb-2 p-2">
                                <button class="btn btn-success"><i class="fa-solid fa-plus mr-1"></i>Tambah Merek</button>
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Merek</th>
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
                                    @foreach ($carDetails as $index => $carDetail)
                                        <tr>
                                            <td scope="col" class="">{{ ++$index }}</td>
                                            <td scope="col" class="col-xl-6">
                                                {{ $carDetail->car->merek }}
                                            </td>
                                            <td scope="col">
                                                <div>
                                                    <button type="button" class="btn btn-warning mb-2"><i
                                                            class="fa fa-pencil" aria-hidden="true"></i> Edit</button> |
                                                    <button type="button" class="btn btn-danger mb-2"><i
                                                            class="fa fa-trash" aria-hidden="true"></i>
                                                        Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Tabel Model Mobil</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="mb-2 p-2">
                                <button class="btn btn-success"><i class="fa-solid fa-plus mr-1"></i>Tambah Model</button>
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Merek</th>
                                        <th>Model</th>
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
                                    @foreach ($carDetails as $index => $carDetail)
                                        <tr>
                                            <td scope="col" class="col-xl-0">{{ ++$index }}</td>
                                            <td scope="col" class="col-xl-3">
                                                {{ $carDetail->car->merek }}
                                            </td>
                                            <td scope="col" class="col-xl-3">
                                                {{ $carDetail->model }}
                                            <td scope="col">
                                                <div>
                                                    <button type="button" class="btn btn-warning mb-2"><i
                                                            class="fa fa-pencil" aria-hidden="true"></i> Edit</button> |
                                                    <button type="button" class="btn btn-danger mb-2"><i
                                                            class="fa fa-trash" aria-hidden="true"></i>
                                                        Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
