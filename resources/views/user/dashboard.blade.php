@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="mb-4">
        <h1>Dashboard Pengguna</h1>
        <p class="text-muted">
            Kelola reservasi ruang meeting Anda
        </p>
    </div>

    <!-- Welcome -->
    <div class="card shadow-sm mb-4" style="background: linear-gradient(135deg,#2563eb,#1d4ed8); color:white; border:none;">
        <div class="card-body py-4">
            <h3 class="mb-2">
                <i class="fas fa-handshake"></i>
                Selamat Datang,
                {{ auth()->user()->name }}
            </h3>
        </div>
    </div>

    <!-- Statistik -->
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-white">
            <h5 class="mb-0">
                <i class="fas fa-chart-pie"></i>
                Statistik Reservasi
            </h5>
        </div>
        <div class="card-body">
            <div
                style="
                    max-width:350px;
                    margin:auto;
                ">
                <canvas id="reservationChart"></canvas>
            </div>
            <div class="row text-center mt-4">
                <div class="col-md-6">
                    <h4 class="text-primary">
                        {{ $activeReservations }}
                    </h4>
                    <small class="text-muted">
                        Reservasi Aktif
                    </small>
                </div>
                <div class="col-md-6">
                    <h4 class="text-success">
                        {{ $totalReservations }}
                    </h4>
                    <small class="text-muted">
                        Total Reservasi
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Button -->
    <div class="mb-4">
        <a
            href="{{ route('user.reservations.index') }}"
            class="btn btn-primary">
            <i class="fas fa-calendar-check"></i>
            Riwayat Reservasi
        </a>
    </div>

    <!-- Daftar Ruangan -->
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h5 class="mb-0">
                <i class="fas fa-building"></i>
                Ruangan Tersedia
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                @forelse($rooms as $room)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            @if($room->photo)
                                <img
                                    src="{{ asset('storage/' . $room->photo) }}"
                                    alt="{{ $room->nama_ruangan }}"
                                    class="card-img-top"
                                    style="
                                        height:220px;
                                        object-fit:cover;
                                    ">
                            @else
                                <div
                                    style="
                                        height:220px;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                        background:#f8f9fa;
                                    ">
                                    <i
                                        class="fas fa-image fa-3x text-secondary">
                                    </i>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $room->nama_ruangan }}
                                </h5>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-location-dot"></i>
                                    {{ $room->lokasi }}
                                </p>
                                <p class="text-muted">
                                    <i class="fas fa-users"></i>
                                    {{ $room->kapasitas }}
                                    Orang
                                </p>
                                <p>
                                    {{ $room->fasilitas }}
                                </p>
                            </div>
                            <div
                                class="card-footer bg-white border-0">
                                <a
                                    href="{{ route('user.reservations.create', ['room_id' => $room->id]) }}"
                                    class="btn btn-primary w-100">
                                    <i class="fas fa-calendar-plus"></i>
                                    Reservasi
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            Belum ada ruangan tersedia.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

const ctx =
document.getElementById(
    'reservationChart'
);

new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            'Aktif',
            'Lainnya'
        ],

        datasets: [{
            data: [
                {{ $activeReservations }},
                {{ $otherReservations }}
            ],
            backgroundColor: [
                '#2563eb',
                '#d1d5db'
            ]
        }]
    },

    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});
</script>

@endsection
