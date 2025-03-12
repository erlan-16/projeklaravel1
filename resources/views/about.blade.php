@extends('layouts.app')
@section('title','About')
@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Tentang Kami</h1>
    
    <!-- Visi & Misi Section -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2>Visi & Misi</h2>
            <h4>Visi</h4>
            <p>Menyediakan website yang berguna dan bermanfaat</p>
            <h4>Misi</h4>
            <ul>
                <li>Menyediakan solusi teknologi yang mudah dipahami dan diakses.</li>
                <li>Mendorong kolaborasi dan kreativitas dalam pengembangan aplikasi.</li>
                <li>Mengoptimalkan performa dan tampilan dengan teknologi modern.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="visi-misi.png" alt="Visi dan Misi" class="img-fluid rounded">
        </div>
    </div>

    <!-- Sejarah Section -->
    <div class="mb-5">
        <h2 class="text-center">Sejarah Kami</h2>
        <p>
            ErlanApp bermula dari ide sederhana untuk mengembangkan aplikasi web yang user-friendly dan dapat dimodifikasi dengan mudah. 
            Dengan menggunakan Laravel Blade, kami berhasil mengintegrasikan berbagai komponen dan fitur modern dalam satu platform yang dinamis.
            Proyek ini dibangun dengan semangat kolaborasi dan inovasi, serta didukung oleh tim yang berdedikasi tinggi.
        </p>
    </div>

    <!-- Tim Kami Section -->
    <div class="mb-5">
        <h2 class="text-center">Tim Kami</h2>
                <div class="row">
                            <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="toha.jpeg" class="card-img-top" alt="John Doe">
                        <div class="card-body text-center">
                            <h5 class="card-title">Toha</h5>
                            <p class="card-text">Founder &amp; CEO</p>
                        </div>
                    </div>
                </div>
                            <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="Bung_amba.webp" class="card-img-top" alt="Jane Smith">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bung Amba</h5>
                            <p class="card-text">Lead Developer</p>
                        </div>
                    </div>
                </div>
                            <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="yoyok.jpg" class="card-img-top" alt="Mike Johnson">
                        <div class="card-body text-center">
                            <h5 class="card-title">Yoyok Sukawi</h5>
                            <p class="card-text">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                    </div>
    </div>

    <!-- Hubungi Kami Section -->
    <div class="mb-5">
        <h2 class="text-center">Hubungi Kami</h2>
        <p class="text-center">
            Jika Anda memiliki pertanyaan atau masukan, silakan hubungi kami melalui:
        </p>
        <div class="text-center">
            <p>Email: <a href="erlaneka005@gmail.com">erlaneka005@gmail.com</a></p>
            <p>Telepon: <a href="tel:+62819392078050">+62819392078050</a></p>
            <p>Alamat: Jl. Genuksari Rt 06 Rw 01</p>
        </div>
    </div>
</div>
@endsection