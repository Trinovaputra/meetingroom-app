<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function admin()
    {
        $totalRooms = Room::count();
        $totalReservations = Reservation::count();
        $totalUsers = User::where('role', 'user')->count();
        $latestReservations = Reservation::with([
                'user',
                'room'
        ])
        ->latest()
        ->take(5)
        ->get();

        $pendingReservations = Reservation::where(
            'status',
            'pending'
        )
        ->count();

        $chartData = [
            $totalRooms,
            $totalReservations,
            $totalUsers,
            $pendingReservations
        ];

        return view('admin.dashboard', compact(
            'totalRooms',
            'totalReservations',
            'totalUsers',
            'latestReservations',
            'pendingReservations',
            'chartData'
        ));
    }

    public function user()
    {
        $rooms = Room::where(
        'status',
        'tersedia'
        )->latest()->get();

        $activeReservations = Reservation::where(
                'user_id',
                auth()->id()
            )
            ->where('status', 'approved')
            ->count();

        $totalReservations = Reservation::where(
                'user_id',
                auth()->id()
            )
            ->count();

        $otherReservations = $totalReservations - $activeReservations;

        return view('user.dashboard', compact(
                'rooms',
                'activeReservations',
                'totalReservations',
                'otherReservations'
            )
        );
    }
}
