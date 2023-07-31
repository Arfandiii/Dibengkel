@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit Pengguna</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard-admin">Home</a></li>
                <li class="breadcrumb-item text-gray-800">User</li>
                <li class="breadcrumb-item active"><a href="" aria-current="page">Profile</a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card mb-4">
                    <div class="card-body pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/img/user.png') }}" alt="" class="rounded-circle mb-4">
                        <h2 class="text-gray-900 h3 font-weight-bold">{{ $user->first_name . ' ' . $user->last_name }}</h2>
                        <h3 class="text-gray-900 h5">test</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header py-2">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="true">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation" style="margin-left: 20px">
                                <button class="nav-link" id="change-password-tab" data-bs-toggle="tab"
                                    data-bs-target="#change-password-tab-pane" type="button" role="tab"
                                    aria-controls="change-password-tab-pane" aria-selected="false">Change Password</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">
                            <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                        Foto</label>
                                    <div class="col-md-8 col-lg-9">
                                        @if ($user->image)
                                            <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->first_name }}"
                                                class=" rounded img-preview col-sm-3 mb-2">
                                        @else
                                            <img src="{{ asset('assets/img/user.png') }}" alt="{{ $user->first_name }}"
                                                class=" rounded col-sm-3 mb-2">
                                        @endif
                                        <div class="pt-2">
                                            <div class="mb-5">
                                                <div class="btn btn-primary btn-upload">
                                                    <i class="fa-solid fa-upload"></i>
                                                </div>
                                                <div class="file-input-wrapper">
                                                    <input class="form-control file-input" id="image" type="file"
                                                        name="image" onchange="previewImage()">
                                                    <label for="image" class="form-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 mt-6">
                                    <label for="FirstName" class="col-md-4 col-lg-3 col-form-label">Nama Depan
                                    </label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="first_name" type="text" class="form-control" id="FirstName"
                                            value="{{ old('first_name', $user->first_name) }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="LastName" class="col-md-4 col-lg-3 col-form-label">Nama Belakang</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="last_name" type="text" class="form-control" id="LastName"
                                            value="{{ old('last_name', $user->last_name) }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="text" class="form-control" id="Email"
                                            value="{{ old('email', $user->email) }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="NoTelp" class="col-md-4 col-lg-3 col-form-label">Nomon Telepon</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="nomor_telpon" type="NoTelp" class="form-control" id="NoTelp"
                                            value="{{ old('nomor_telpon', $user->nomor_telepon) }}">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="change-password-tab-pane" role="tabpanel"
                            aria-labelledby="change-password-tab" tabindex="0">
                            <form>

                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control"
                                            id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="renewpassword" type="password" class="form-control"
                                            id="renewPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /.container-fluid -->
@endsection
