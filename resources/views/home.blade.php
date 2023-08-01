@extends('layouts.main')

@section('container')
    <!-- Main Section -->
    <main>
        <div class="my-5 container row">
            <div class="col-lg-7 col-md-5 mt-5">
                <h1>Hai, ada yang bisa kami bantu?</h1>
                <div id="carouselExample" class="carousel slide mt-5">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/banner_1.webp') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/banner_2.webp') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/banner_3.webp') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-5 col-md-7 mt-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item me-4" role="presentation">
                        <button class="nav-link px-5 py-3 fs-5 fw-medium text-dark active" id="mobil-tab"
                            data-bs-toggle="tab" data-bs-target="#mobil-tab-pane" type="button" role="tab"
                            aria-controls="mobil-tab-pane" aria-selected="true">Mobil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-5 py-3 fs-5 fw-medium text-dark" id="motor-tab" data-bs-toggle="tab"
                            data-bs-target="#motor-tab-pane" type="button" role="tab" aria-controls="motor-tab-pane"
                            aria-selected="false">Motor</button>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="tab-pane fade show active" id="mobil-tab-pane" role="tabpanel" aria-labelledby="mobil-tab"
                        tabindex="0">
                        <div class="bg-light p-5 rounded mt-0">
                            <form action="{{ route('create.carService') }}" method="POST">
                                @csrf
                                @auth
                                    <input type="hidden" name="user_id" id="inputNameUser" value="{{ auth()->user()->id }}">
                                @endauth
                                <div class="mb-3">
                                    <label for="inputNomorPolisi" class="form-label">Nomor Polisi</label>
                                    <input type="text" class="form-control @error('nomor_polisi') is-invalid @enderror"
                                        id="inputNomorPolisi" name="nomor_polisi" aria-describedby="emailHelp">
                                    @error('nomor_polisi')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="inputBrand" class="form-label">Brand</label>
                                    <select name="car_brand_id" class="form-select" id="inputBrand"
                                        aria-label="Default select example">
                                        <option selected>-- Pilih Brand --</option>
                                        @foreach ($carBrands as $carBrand)
                                            <option value="{{ $carBrand->id }}">{{ $carBrand->brand }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputModel" class="form-label">Model</label>
                                    <input type="text" class="form-control @error('model') is-invalid @enderror"
                                        id="inputModel" name="model">
                                    @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="inputService" class="form-label">Servis</label>
                                    <input type="text" class="form-control @error('service') is-invalid @enderror"
                                        id="inputService" name="service">
                                    @error('service')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    {{-- form service motor --}}
                    <div class="tab-pane fade" id="motor-tab-pane" role="tabpanel" aria-labelledby="motor-tab"
                        tabindex="0">
                        <div class="bg-light p-5 rounded mt-0">
                            <form method="POST" action="{{ route('create.motorcycleService') }}">
                                @csrf
                                <input type="hidden" name="user_id" id="inputNameUser">
                                <div class="mb-3">
                                    <label for="inputNomorPolisi" class="form-label">Nomor Polisi</label>
                                    <input type="text" class="form-control @error('nomor_polisi') is-invalid @enderror"
                                        id="inputNomorPolisi" name="nomor_polisi" aria-describedby="emailHelp">
                                    @error('nomor_polisi')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="inputBrand" class="form-label">Brand</label>
                                    <select name="brand_id" class="form-select" id="inputBrand"
                                        aria-label="Default select example">
                                        <option selected>-- Pilih Brand --</option>
                                        @foreach ($motorcycleBrands as $motorcycleBrand)
                                            <option value="{{ $motorcycleBrand->id }}">{{ $motorcycleBrand->brand }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputModel" class="form-label">Model</label>
                                    <input type="text" class="form-control  @error('model') is-invalid @enderror"
                                        id="inputModel" name="model">
                                    @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="inputService" class="form-label">Servis</label>
                                    <input type="text" class="form-control @error('service') is-invalid @enderror"
                                        id="inputService" name="service">
                                    @error('service')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
