@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Car Merek Modal-->
    <div class="modal fade" id="brandCarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Brand Mobil</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="cars/" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" class="form-control form-control-user @error('brand') is-invalid @enderror"
                            id="brand" name="brand" placeholder="Nama Brand" required value="{{ old('brand') }}">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Mobil</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @error('brand')
            <div class="alert alert-danger">
                Data Brand sudah ada !
            </div>
        @enderror
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Tabel Brand Mobil</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="mb-2 p-2">
                        <button class="btn btn-success" data-toggle="modal" data-target="#brandCarModal"><i
                                class="fa-solid fa-plus mr-1"></i>Tambah Merek</button>
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
                            @foreach ($carBrands as $carBrand)
                                <!-- Delete Modal-->
                                <div class="modal fade" id="deleteModal{{ $carBrand->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Anda yakin akan menghapus
                                                    Brand ini?</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Pilih "Hapus" jika anda yakin untuk menghapus Brand
                                                {{ $carBrand->brand }} ini.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Batal</button>
                                                <form action="cars/{{ $carBrand->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Edit Modal-->
                                <div class="modal fade" id="editModal{{ $carBrand->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Brand Mobil
                                                </h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="cars/{{ $carBrand->id }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <input type="text"
                                                        class="form-control form-control-user @error('brand') is-invalid @enderror"
                                                        id="brand" name="brand" placeholder="Nama Brand" required
                                                        value="{{ old('brand'), $carBrand->brand }}">
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


                                {{-- tabel mobil --}}
                                <tr>
                                    <td scope="col" class="">{{ $loop->iteration }}</td>
                                    <td scope="col" class="col-xl-10">
                                        {{ $carBrand->brand }}
                                    </td>
                                    <td scope="col" class="col-xl-2" style="height: 100px;">
                                        <div class="d-flex
                                            justify-content-around align-items-center"
                                            style="height: 100px;">
                                            <button class="btn btn-warning mb-2" data-toggle="modal"
                                                data-target="#editModal{{ $carBrand->id }}"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i> Edit</button> |
                                            <button class="btn btn-danger mb-2" data-toggle="modal"
                                                data-target="#deleteModal{{ $carBrand->id }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
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

        {{-- <div class="col-xl-6 col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Tabel Model Mobil</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="mb-2 p-2">
                            <button class="btn btn-success" data-toggle="modal" data-target="#modelCarModal"><i
                                    class="fa-solid fa-plus mr-1"></i>Tambah Model</button>
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
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($carModels as $index => $carModel)
                                    <tr>
                                        <td scope="col" class="col-xl-0">{{ ++$index }}</td>
                                        <td scope="col" class="col-xl-3">
                                            {{ $carModel->car_brand->brand }}
                                        </td>
                                        <td scope="col" class="col-xl-3">
                                            {{ $carModel->model }}
                                        <td scope="col">
                                            <div>
                                                <button type="button" class="btn btn-warning mb-2"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i> Edit</button> |
                                                <button type="button" class="btn btn-danger mb-2"><i class="fa fa-trash"
                                                        aria-hidden="true"></i>
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
        </div> --}}
    </div>
    <!-- /.container-fluid -->
@endsection
