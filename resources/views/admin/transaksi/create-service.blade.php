@extends('components.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Buat Transaksi servis</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard-admin">Home</a></li>
                <li class="breadcrumb-item text-gray-800">Pengguna</li>
                <li class="breadcrumb-item active"><a href="" aria-current="page">transaksi</a></li>
            </ol>
        </nav>
        <div class="row justify-content-center">

            <div class="col-xl-8 col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header py-2">
                        <h2 class="h3 mb-2 text-gray-900 text-center">Tambah Transaksi service Mobil</h2>
                    </div>
                    <div class="card-body tab-content">
                        <form action="/car-services" method="POST">
                            @csrf
                            <div class="row mb-3 mt-6">
                                <label for="Name" class="col-md-4 col-lg-3 col-form-label">Nama
                                </label>
                                <div class="col-md-8 col-lg-9">
                                    <select name="user_id" class="form-select @error('user_id') is-invalid @enderror"
                                        id="Name" aria-label="Default select example">
                                        <option selected>-- Pilih Nama --</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->first_name }}
                                                {{ $user->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputBrand" class="col-md-4 col-lg-3 col-form-label">Brand</label>
                                <div class="col-md-8 col-lg-9">
                                    <select name="car_brand_id"
                                        class="form-select @error('car_brand_id') is-invalid @enderror" id="inputBrand"
                                        aria-label="Default select example">
                                        <option selected>-- Pilih Brand --</option>
                                        @foreach ($carBrands as $carBrand)
                                            <option value="{{ $carBrand->id }}">{{ $carBrand->brand }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('car_brand_id')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Model" class="col-md-4 col-lg-3 col-form-label">Model</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="model" type="text"
                                        class="form-control @error('model') is-invalid @enderror" id="Model"
                                        value="{{ old('model') }}">
                                    @error('model')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="NomorKendaraan" class="col-md-4 col-lg-3 col-form-label">Nomor Kendaraan</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nomor_polisi" type="text"
                                        class="form-control @error('nomor_polisi') is-invalid @enderror" id="NomorKendaraan"
                                        value="{{ old('nomor_polisi') }}">
                                    @error('nomor_polisi')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Servis" class="col-md-4 col-lg-3 col-form-label">Servis</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="service" type="text"
                                        class="form-control @error('service') is-invalid @enderror" id="Servis"
                                        value="{{ old('service') }}">
                                    @error('service')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /.container-fluid -->
@endsection
