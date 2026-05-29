@extends('layouts.app')

@section('content')
<div style="display: flex; align-items: center; justify-content: center; min-height: calc(100vh - 200px);">
    <div class="card" style="width: 100%; max-width: 420px;">
        <div class="card-body" style="padding: 2.5rem;">
            <!-- Logo & Title -->
            <div class="text-center mb-6" style="margin-bottom: 2rem;">
                <h2 style="font-size: 1.75rem; margin-bottom: 0.5rem; color: var(--primary);">📋</h2>
                <h3 style="margin-bottom: 0.25rem;">Meeting Room Reservation</h3>
                <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 0;">Sistem Manajemen Ruang Meeting</p>
            </div>

            <!-- Login Form -->
            <form action="/login" method="POST">
                @csrf

                <!-- Email Input -->
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="contoh@email.com"
                        value="{{ old('email') }}"
                        required
                        autofocus>
                    @error('email')
                        <p class="form-text" style="color: var(--danger); margin-top: 0.5rem;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password Anda"
                        required>
                    @error('password')
                        <p class="form-text" style="color: var(--danger); margin-top: 0.5rem;">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-group" style="margin-bottom: var(--spacing-lg); display: flex; align-items: center; gap: 0.5rem;">
                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        style="width: 18px; height: 18px; cursor: pointer;">
                    <label for="remember" style="margin-bottom: 0; cursor: pointer; font-weight: 400;">Ingat saya</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg w-100" style="margin-bottom: var(--spacing-md);">
                    Masuk
                </button>
{{--
                <!-- Divider -->
                <div style="text-align: center; color: var(--gray); font-size: 0.875rem; margin: var(--spacing-lg) 0; position: relative;">
                    <span style="background-color: var(--white); padding: 0 0.5rem;">atau</span>
                </div>

                <!-- Help Text -->
                <p class="text-muted" style="text-align: center; font-size: 0.875rem; margin-bottom: 0;">
                    Hubungi administrator untuk membuat akun baru
                </p> --}}
            </form>
        </div>

        <!-- Footer Info -->
        <div style="background-color: var(--secondary); padding: var(--spacing-lg); border-top: 1px solid var(--border); text-align: center;">
            <p class="text-muted" style="font-size: 0.8125rem; margin-bottom: 0;">
                🔒 Sistem ini aman dan dilindungi dengan enkripsi tingkat enterprise
            </p>
        </div>
    </div>
</div>
@endsection
