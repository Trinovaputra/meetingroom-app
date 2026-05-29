@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: var(--white); padding: var(--spacing-2xl); border-radius: var(--radius-lg); margin-bottom: var(--spacing-2xl); text-align: center;">
    <h1 style="font-size: 2.5rem; margin-bottom: var(--spacing-lg); color: var(--white);">📋 Sistem Reservasi Ruang Meeting</h1>
    <p style="font-size: 1.125rem; margin-bottom: var(--spacing-xl); color: rgba(255, 255, 255, 0.9);">
        Kelola dan reservasi ruang meeting Anda dengan mudah dan efisien
    </p>
    @auth
        <a href="/user/dashboard" class="btn btn-secondary btn-lg" style="gap: 0.75rem;">
            <span>➡️</span>
            <span>Masuk ke Dashboard</span>
        </a>
    @else
        <a href="/login" class="btn btn-secondary btn-lg" style="gap: 0.75rem;">
            <span>🔐</span>
            <span>Login Sekarang</span>
        </a>
    @endauth
</div>

<!-- Features Section -->
<div style="margin-bottom: var(--spacing-2xl);">
    <h2 style="text-align: center; margin-bottom: var(--spacing-2xl);">Fitur Utama</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--spacing-lg);">
        <!-- Feature Card 1 -->
        <div class="card">
            <div class="card-body" style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: var(--spacing-md);">📅</div>
                <h4 style="margin-bottom: 0.5rem;">Reservasi Mudah</h4>
                <p class="text-muted" style="margin-bottom: 0; font-size: 0.875rem;">
                    Pesan ruang meeting Anda dengan beberapa klik saja
                </p>
            </div>
        </div>

        <!-- Feature Card 2 -->
        <div class="card">
            <div class="card-body" style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: var(--spacing-md);">📊</div>
                <h4 style="margin-bottom: 0.5rem;">Dashboard Analytics</h4>
                <p class="text-muted" style="margin-bottom: 0; font-size: 0.875rem;">
                    Pantau penggunaan ruang dan statistik reservasi
                </p>
            </div>
        </div>

        <!-- Feature Card 3 -->
        <div class="card">
            <div class="card-body" style="text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: var(--spacing-md);">👥</div>
                <h4 style="margin-bottom: 0.5rem;">Manajemen Pengguna</h4>
                <p class="text-muted" style="margin-bottom: 0; font-size: 0.875rem;">
                    Kelola pengguna dan atur permission dengan mudah
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Info Section -->
<div class="card" style="background-color: var(--secondary);">
    <div class="card-body">
        <h3 style="margin-bottom: var(--spacing-lg);">ℹ️ Informasi Sistem</h3>
        <p style="margin-bottom: var(--spacing-md);">
            <strong>Meeting Room Reservation System</strong> adalah solusi modern untuk mengelola reservasi ruang meeting di organisasi Anda. Dirancang dengan antarmuka yang user-friendly dan fitur-fitur lengkap untuk meningkatkan produktivitas.
        </p>
        <p style="margin-bottom: 0;">
            Sistem ini mendukung manajemen multi-ruang, tracking history, dan reporting yang komprehensif untuk memastikan penggunaan ruang meeting yang optimal.
        </p>
    </div>
</div>

@endsection
