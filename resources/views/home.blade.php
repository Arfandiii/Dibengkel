@extends('layouts.main')

@section('container')
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
