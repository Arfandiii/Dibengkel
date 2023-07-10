@extends('components.app')
@extends('components.sidebar')
@extends('components.topbar')
@extends('components.footer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Profile</h1>
        <p class="text-gray-800"><a href="/dashboard" class="text-gray-800">Home</a> / User / <a href="/profile"
                class="text-gray-800">Profile</a></p>

        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card mb-4">
                    <div class="card-body pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="" class="rounded-circle mb-4">
                        <h2 class="text-gray-900 h3 font-weight-bold">Test</h2>
                        <h3 class="text-gray-900 h5 ">test</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header py-2">
                        <ul>
                            <li>Profile</li>
                            <li>Profile</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="assets/img/profile-img.jpg" alt="Profile">
                                    <div class="pt-2">
                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i
                                                class="bi bi-upload"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                                class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="fullName" type="text" class="form-control" id="fullName"
                                        value="Kevin Anderson">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="fullName" type="text" class="form-control" id="fullName"
                                        value="Kevin Anderson">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="address" type="text" class="form-control" id="Address"
                                        value="A108 Adam Street, New York, NY 535022">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="Email"
                                        value="k.anderson@example.com">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="phone" type="text" class="form-control" id="Phone"
                                        value="(436) 486-3538 x29071">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="twitter" type="text" class="form-control" id="Twitter"
                                        value="https://twitter.com/#">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
