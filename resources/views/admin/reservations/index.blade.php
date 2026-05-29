@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Data Reservasi</h2>
            <p class="text-muted mb-0">
                Kelola dan verifikasi reservasi ruangan meeting
            </p>
        </div>
        <a href="{{ url('/admin/dashboard') }}"
            class="btn btn-secondary">
            Kembali
        </a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Ruangan</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Keperluan</th>
                            <th>Status</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($reservations as $reservation)
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
                                {{ $reservation->jam_mulai }}
                                -
                                {{ $reservation->jam_selesai }}
                            </td>
                            <td>
                                {{ $reservation->keperluan }}
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
                            <td>
                                @if($reservation->status == 'pending')
                                    <form
                                        action="{{ route('reservations.approve', $reservation) }}"
                                        method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button
                                            class="btn btn-success btn-sm">
                                            Approve
                                        </button>
                                    </form>
                                    <form
                                        action="{{ route('reservations.reject', $reservation) }}"
                                        method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button
                                            class="btn btn-danger btn-sm">
                                            Reject
                                        </button>
                                    </form>
                                @else
                                    <span class="text-muted">
                                        Selesai
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7"
                                class="text-center">
                                Belum ada reservasi
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $reservations->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
