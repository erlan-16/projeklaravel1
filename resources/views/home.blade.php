@extends('layouts.app')
@section('title','Home')
@section('content')
<!-- Hero Section -->
<div class="jumbotron text-center bg-light py-5">
    <h1 class="display-4">Selamat Datang di ErlanApp</h1>
    <p class="lead">Aplikasi Laravel sederhana yang menampilkan fitur-fitur modern dengan Laravel Blade.</p>
    <a href="https://jobsheet4.radivahera.my.id/profile" class="btn btn-primary btn-lg">Lihat Profil</a>
</div>

<!-- Features Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Fitur Unggulan</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="https://jobsheet4.radivahera.my.id/images/feature1.png" class="card-img-top h-70" alt="Responsif">
                <div class="card-body">
                    <h5 class="card-title">Responsif</h5>
                    <p class="card-text">Desain yang responsif dan modern, didukung oleh Bootstrap 5.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="https://jobsheet4.radivahera.my.id/images/feature2.png" class="card-img-top" alt="Mudah Disesuaikan">
                <div class="card-body">
                    <h5 class="card-title">Mudah Disesuaikan</h5>
                    <p class="card-text">Tampilan dan komponen dapat dengan mudah disesuaikan sesuai kebutuhan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="https://jobsheet4.radivahera.my.id/images/feature3.png" class="card-img-top" alt="Blade Templating">
                <div class="card-body">
                    <h5 class="card-title">Blade Templating</h5>
                    <p class="card-text">Menggunakan Laravel Blade untuk pembuatan tampilan yang dinamis dan reusable.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio/Proyek Terkini Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Proyek Terkini</h2>
    
    <div class="row">
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="https://jobsheet4.radivahera.my.id/images/project1.jpg" class="card-img-top" alt="Proyek A">
                    <div class="card-body">
                        <h5 class="card-title">Proyek A</h5>
                        <p class="card-text">Deskripsi singkat proyek A.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="https://jobsheet4.radivahera.my.id/images/project2.jpg" class="card-img-top" alt="Proyek B">
                    <div class="card-body">
                        <h5 class="card-title">Proyek B</h5>
                        <p class="card-text">Deskripsi singkat proyek B.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="https://jobsheet4.radivahera.my.id/images/project3.jpg" class="card-img-top" alt="Proyek C">
                    <div class="card-body">
                        <h5 class="card-title">Proyek C</h5>
                        <p class="card-text">Deskripsi singkat proyek C.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            </div>
</div>

<!-- Testimonials Section -->
<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Testimoni</h2>
    
    <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                            <div class="carousel-item  active ">
                    <div class="d-flex flex-column align-items-center">
                        <img src="https://jobsheet4.radivahera.my.id/images/user1.png" class="rounded-circle mb-3" alt="Andi" width="100">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">"Aplikasi ini sangat membantu dan mudah digunakan!"</p>
                            <footer class="blockquote-footer">Andi</footer>
                        </blockquote>
                    </div>
                </div>
                            <div class="carousel-item ">
                    <div class="d-flex flex-column align-items-center">
                        <img src="https://jobsheet4.radivahera.my.id/images/user1.png" class="rounded-circle mb-3" alt="Budi" width="100">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">"Fitur-fiturnya keren dan desainnya menarik."</p>
                            <footer class="blockquote-footer">Budi</footer>
                        </blockquote>
                    </div>
                </div>
                            <div class="carousel-item ">
                    <div class="d-flex flex-column align-items-center">
                        <img src="https://jobsheet4.radivahera.my.id/images/user1.png" class="rounded-circle mb-3" alt="Citra" width="100">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">"Sangat puas dengan performa dan keandalannya."</p>
                            <footer class="blockquote-footer">Citra</footer>
                        </blockquote>
                    </div>
                </div>
                    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>
</div>
@endsection