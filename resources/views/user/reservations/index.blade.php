@extends('layouts.app')

@section('content')

<div class="container">
    <div
        class="d-flex justify-content-between">
        <h3>Riwayat Reservasi</h3>
        <a
            href="{{ route('user.reservations.create') }}"
            class="btn btn-primary">
            Reservasi
        </a>
    </div>
    <table
        class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Ruangan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
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
                        {{ $reservation->status }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
