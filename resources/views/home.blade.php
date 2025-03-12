@extends('layouts.app')
@section('title','Home')
@section('content')
<!-- Hero Section -->
<div class="jumbotron text-center bg-light py-5">
    <h1 class="display-4">Selamat Datang di ErlanApp</h1>
    <p class="lead">Website sederhana yang dibuat sepenuh hati❤️.</p>
    <a href="https://jobsheet4.radivahera.my.id/profile" class="btn btn-primary btn-lg">Lihat Profil</a>
</div>

<!-- Features Section -->


<!-- Portfolio/Proyek Terkini Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Projek Acuuuuu 👉👈😖</h2>
    
    <div class="row">
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="sspj1.PNG" class="card-img-top" alt="Proyek A">
                    <div class="card-body">
                        <h5 class="card-title">Projek 1</h5>
                        <p class="card-text">Projek pertama acuuuuu .</p>
                        <a href="https://lanstore.erlancihuy.my.id/" class="btn btn-outline-primary btn-sm" target="_blank">Selengkapnya</a>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="sspj2.PNG" class="card-img-top" alt="Proyek B">
                    <div class="card-body">
                        <h5 class="card-title">Proyek 2</h5>
                        <p class="card-text">Projek kedua acuuuu.</p>
                        <a href="https://manchester.erlancihuy.my.id" class="btn btn-outline-primary btn-sm" target="_blank">Selengkapnya</a>
                    </div>
                </div>
            </div>
                    <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="sspj3.PNG" class="card-img-top" alt="Proyek C">
                    <div class="card-body">
                        <h5 class="card-title">Proyek 3</h5>
                        <p class="card-text">Projek ketiga acuuuu.</p>
                        <a href="https://bakeryshop.erlancihuy.my.id" class="btn btn-outline-primary btn-sm" target="_blank">Selengkapnya</a>
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