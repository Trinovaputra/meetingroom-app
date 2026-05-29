@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h3>Edit Ruangan</h3>
    <form action="{{ route('rooms.update', $room) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.rooms.form')
    </form>
</div>

@endsection
