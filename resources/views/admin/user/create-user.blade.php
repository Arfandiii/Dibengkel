@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Pengguna</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard-admin">Home</a></li>
                <li class="breadcrumb-item text-gray-800">User</li>
                <li class="breadcrumb-item active"><a href="" aria-current="page">Pengguna</a></li>
            </ol>
        </nav>
        <div class="row justify-content-center">

            <div class="col-xl-8 col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header py-2">
                        <h2 class="h3 mb-2 text-gray-900 text-center">Tambah Data Pengguna</h2>
                    </div>
                    <div class="card-body tab-content">
                        <form action="/users" method="POST">
                            @csrf
                            <div class="row mb-3 mt-6">
                                <label for="FirstName" class="col-md-4 col-lg-3 col-form-label">Nama Depan
                                </label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="first_name" type="text"
                                        class="form-control @error('first_name') is-invalid @enderror" id="FirstName"
                                        value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="LastName" class="col-md-4 col-lg-3 col-form-label">Nama Belakang</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="last_name" type="text"
                                        class="form-control @error('last_name') is-invalid @enderror" id="LastName"
                                        value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" id="Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="NoTelp" class="col-md-4 col-lg-3 col-form-label">Nomon Telepon</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nomor_telepon" type="text"
                                        class="form-control @error('nomor_telepon') is-invalid @enderror" id="NoTelp"
                                        value="{{ old('nomor_telepon') }}">
                                    @error('nomor_telepon')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" id="Password"
                                        value="{{ old('Password') }}">
                                    @error('password')
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
