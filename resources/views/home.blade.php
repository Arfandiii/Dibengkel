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
                            <img src="..." class="d-block w-100 p-5 bg-warning" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100 p-5 bg-warning" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100 p-5 bg-warning" alt="...">
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
                    <div class="tab-pane fade show active" id="mobil-tab-pane" role="tabpanel" aria-labelledby="mobil-tab"
                        tabindex="0">mobil</div>
                    <div class="tab-pane fade" id="motor-tab-pane" role="tabpanel" aria-labelledby="motor-tab"
                        tabindex="0">
                        motor</div>
                </div>
            </div>
        </div>
    </main>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Welcome to Your Website</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae lobortis lorem. Sed ac mi sit
                        amet ex bibendum commodo. Fusce sit amet malesuada ipsum.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x500" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section mt-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12 text-center">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/500x300" alt="Service Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Service 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis,
                                molestiae.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/500x300" alt="Service Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Service 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae
                                lobortis lorem.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/500x300" alt="Service Image" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Service 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae
                                lobortis lorem.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section my-5">
        <div class="container">
            <div class="row mt-5 my-4">
                <div class="col-md-12 text-center">
                    <h2>Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae
                                lobortis lorem. Sed ac mi sit amet ex bibendum commodo."</p>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">CEO, Company Inc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae
                                lobortis lorem. Sed ac mi sit amet ex bibendum commodo."</p>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-title">Jane Doe</h5>
                            <p class="card-text">Marketing Manager, Company Inc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae
                                lobortis lorem. Sed ac mi sit amet ex bibendum commodo."</p>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-title">Joe Doe</h5>
                            <p class="card-text">Designer, Company Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
