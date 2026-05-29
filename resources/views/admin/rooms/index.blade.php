@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="d-flex justify-content-between mb-3">
        <h3>Data Ruangan</h3>
        <a href="{{ route('rooms.create') }}"
            class="btn btn-primary">
            Tambah Ruangan
        </a>
    </div>
    <table class="table table-bordered">

        <thead>
            <tr>
                <th>Nama</th>
                <th>Kapasitas</th>
                <th>Lokasi</th>
                <th>Status</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($rooms as $room)
                <tr>
                    <td>{{ $room->nama_ruangan }}</td>
                    <td>{{ $room->kapasitas }}</td>
                    <td>{{ $room->lokasi }}</td>
                    <td>{{ $room->status }}</td>
                    <td>
                        <a href="{{ route('rooms.edit', $room) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form
                            action="{{ route('rooms.destroy', $room) }}"
                            method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button
                                class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty

                <tr>
                    <td colspan="5" class="text-center">
                        Data kosong
                    </td>
                </tr>

            @endforelse
        </tbody>
    </table>
</div>

@endsection
