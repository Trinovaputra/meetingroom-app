<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Meeting Room' }} - Sistem Reservasi Ruang Meeting</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-content">
            <a href="/" class="navbar-brand">
                📋 MeetingRoom
            </a>

            <ul class="navbar-menu">
                @auth
                    @if(auth()->user()->role === 'admin')
                        <li><a href="/admin/dashboard" class="navbar-link @if(request()->is('admin*')) active @endif">Dashboard Admin</a></li>
                        <li><a href="/rooms" class="navbar-link @if(request()->is('admin/rooms*')) active @endif">Kelola Ruangan</a></li>
                        <li><a href="/admin/reservations" class="navbar-link @if(request()->is('admin/reservations*')) active @endif">Reservasi</a></li>
                    @else
                        <li><a href="/user/user/dashboard" class="navbar-link @if(request()->is('user*')) active @endif">Dashboard</a></li>
                        <li><a href="/user/reservations" class="navbar-link @if(request()->is('user/reservations*')) active @endif">Reservasi Saya</a></li>
                    @endif
                    <li>
                        <form action="/logout" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    </li>
                @else
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        <div class="container py-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <div>
                        <strong>Terjadi kesalahan:</strong>
                        <ul style="margin-top: 0.5rem; margin-bottom: 0;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    <div>✓ {{ session('success') }}</div>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer style="background:#111827; color:white; margin-top:60px; padding:30px 20px;">
        <div style="max-width:1200px; margin:auto; display:flex; flex-wrap:wrap; justify-content:space-between; gap:20px;">
            <div style="flex:1; min-width:250px;">
                <h5 style="margin-bottom:10px;">
                    Meeting Room Reservation
                </h5>
                <p style="color:rgba(255,255,255,.7); margin:0; line-height:1.6;">
                    Sistem reservasi ruang meeting yang membantu
                    pengelolaan jadwal ruangan secara efektif.
                </p>
            </div>
            <div style="flex:1; min-width:250px; text-align:right;">
                <p style="color:rgba(255,255,255,.7); margin:0;">
                    © {{ date('Y') }}
                    Meeting Room Reservation
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
