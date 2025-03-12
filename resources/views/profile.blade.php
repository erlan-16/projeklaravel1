@extends('layouts.app')
@section('title', 'Profile Saya')
@section('content')
    <div class="card shadow-lg border-0 rounded-4">
    <div class="card-header bg-black text-white text-center py-3">
        <h1 class="mb-0">Profile Saya</h1>
    </div>
    <div class="card-body text-center">
        <img src="Bung_amba.webp" alt="Profile Picture" class="rounded-circle border border-3 border-gray mb-3" width="150">
        <h4 class="fw-bold">Erlan Eka Putra Susanto</h4>
        <p class="text-muted mb-1"><i class="bi bi-envelope"></i> erlaneka005@gmail.com</p>
        <p class="text-muted">Siswa SMKN 1 Sayung</p>
        
        <h5 class="mt-3">Skil Guwejh</h5>
        <div class="d-flex justify-content-center flex-wrap">
            <span class="badge bg-primary m-1">👨‍🍳 Masak</span>
            <span class="badge bg-danger m-1">🧤 Kiper</span>
            <span class="badge bg-warning text-dark m-1">💡 Pasang Lampu</span>
            <span class="badge bg-info text-dark m-1">🔥 Pasang Gas</span>
        </div>
    </div>
    </div>
@endsection