<div class="mb-3">
    <label>Nama Ruangan</label>
    <input
        type="text"
        name="nama_ruangan"
        value="{{ old('nama_ruangan', $room->nama_ruangan ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Kapasitas</label>
    <input
        type="number"
        name="kapasitas"
        value="{{ old('kapasitas', $room->kapasitas ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Lokasi</label>
    <input
        type="text"
        name="lokasi"
        value="{{ old('lokasi', $room->lokasi ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Fasilitas</label>
    <textarea
        name="fasilitas"
        class="form-control">{{ old('fasilitas', $room->fasilitas ?? '') }}</textarea>
</div>

@if(isset($room) && $room->photo)
    <div class="mb-3">
        <img
            src="{{ asset('storage/' . $room->photo) }}"
            width="200"
            class="img-thumbnail">
    </div>
@endif

<div class="mb-3">
    <label>Foto Ruangan</label>
    <input
        type="file"
        name="photo"
        class="form-control">
</div>

<div class="mb-3">
    <label>Status</label>
    <select
        name="status"
        class="form-select">
        <option value="tersedia">
            Tersedia
        </option>
        <option value="maintenance">
            Maintenance
        </option>
    </select>
</div>
<button class="btn btn-primary">
    Simpan
</button>
