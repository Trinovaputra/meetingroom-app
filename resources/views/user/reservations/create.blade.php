@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Buat Reservasi</h3>
    <form
        action="{{ route('user.reservations.store') }}"
        method="POST">
        @csrf
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
            <div class="mb-3">
                <label>Ruangan</label>
                <select
                    name="room_id"
                    class="form-select">
                    @foreach($rooms as $room)
                        <option
                            value="{{ $room->id }}"
                            {{ $selectedRoom == $room->id ? 'selected' : '' }}>
                            {{ $room->nama_ruangan }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tanggal</label>
                <input
                    type="date"
                    name="tanggal"
                    class="form-control">
            </div>
            <div class="mb-3">
                <label>Jam Mulai</label>
                <input
                    type="time"
                    name="jam_mulai"
                    class="form-control">
            </div>
            <div class="mb-3">
                <label>Jam Selesai</label>
                <input
                    type="time"
                    name="jam_selesai"
                    class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label>Keperluan</label>
            <textarea
                name="keperluan"
                class="form-control"></textarea>
        </div>
        <button
            class="btn btn-primary">
            Simpan
        </button>
    </form>
</div>

@endsection
