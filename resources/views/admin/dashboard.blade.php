@extends('layouts.app')

@section('content')

<!-- Page Header -->
<div style="margin-bottom: var(--spacing-2xl);">
    <h1 style="margin-bottom: 0.5rem;">Dashboard Admin</h1>
    <p class="text-muted">Kelola sistem reservasi ruang meeting Anda</p>
</div>

<!-- Dashboard Analytics -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-white">
        <h5 class="mb-0">
            <i class="fas fa-chart-pie fa-lg text-primary"></i>
            Statistik Sistem
        </h5>
    </div>
    <div class="card-body">
        <div style="max-width:450px; margin:auto;">
            <canvas id="adminChart"></canvas>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-building fa-2x text-primary mb-2"></i>
                <h3>
                    {{ $totalRooms }}
                </h3>
                <p class="text-muted mb-0">
                    Total Ruangan
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-calendar-check fa-2x text-info mb-2"></i>
                <h3>
                    {{ $totalReservations }}
                </h3>
                <p class="text-muted mb-0">
                    Reservasi
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-users fa-2x text-success mb-2"></i>
                <h3>
                    {{ $totalUsers }}
                </h3>
                <p class="text-muted mb-0">
                    User
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <i class="fas fa-clock fa-2x text-warning mb-2"></i>
                <h3>
                    {{ $pendingReservations }}
                </h3>
                <p class="text-muted mb-0">
                    Pending
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-white">
        <h5 class="mb-0">
            <i class="fas fa-wrench fa-lg text-info"></i>
            Manajemen Ruangan
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-2">
                <a href="{{ route('rooms.index') }}" class="btn btn-primary w-100">
                    <i class="fas fa-building"></i>
                    Kelola Ruangan
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity Section -->
<div class="card" style="margin-top: var(--spacing-xl);">
    <div class="card-header bg-white">
        <h5 class="mb-0">
            <i class="fas fa-clock-rotate-left fa-lg text-info"></i>
            Aktivitas Terbaru
        </h5>
    </div>
    <div class="card-body">
        @if($latestReservations->count())
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Ruangan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latestReservations as $reservation)
                        <tr>
                            <td>
                                {{ $reservation->user->name }}
                            </td>
                            <td>
                                {{ $reservation->room->nama_ruangan }}
                            </td>
                            <td>
                                {{ $reservation->tanggal }}
                            </td>
                            <td>
                                @if($reservation->status == 'pending')
                                    <span class="badge bg-warning">
                                        Pending
                                    </span>
                                @elseif($reservation->status == 'approved')
                                    <span class="badge bg-success">
                                        Approved
                                    </span>
                                @else
                                    <span class="badge bg-danger">
                                        Rejected
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-end">
            <a href="{{ route('reservations.index') }}"
            class="btn btn-sm btn-primary">
                Lihat Semua Reservasi
            </a>
        </div>
        @else
        <p class="text-muted text-center">
            Belum ada reservasi.
        </p>
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx =
    document.getElementById(
        'adminChart'
    );
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Ruangan',
                'Reservasi',
                'User',
                'Pending'
            ],
            datasets: [{
                data: [
                    {{ $totalRooms }},
                    {{ $totalReservations }},
                    {{ $totalUsers }},
                    {{ $pendingReservations }}
                ],
                backgroundColor: [
                    '#2563eb',
                    '#06b6d4',
                    '#22c55e',
                    '#f59e0b'
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
