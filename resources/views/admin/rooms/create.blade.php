@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h3>Tambah Ruangan</h3>
    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.rooms.form')
    </form>
</div>

@endsection
