<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Models\Room;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with([
            'room'
        ])->where('user_id',auth()->id())
        ->latest()
        ->get();

        return view(
            'user.reservations.index',
            compact('reservations')
        );
    }

    public function adminIndex()
    {
        $reservations = Reservation::with([
                'user',
                'room'
            ])
            ->latest()
            ->paginate(10);

        return view(
            'admin.reservations.index',
            compact('reservations')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Room::where(
            'status',
            'tersedia'
        )->get();
        $selectedRoom = request('room_id');
        return view(
            'user.reservations.create',
            compact(
                'rooms',
                'selectedRoom'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        Reservation::create([
            'user_id' => auth()->id(),
            'room_id' => $request->room_id,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'keperluan' => $request->keperluan,
            'status' => 'pending'
        ]);

        return redirect()
            ->route('user.reservations.index')
            ->with(
                'success',
                'Reservasi berhasil dibuat'
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function approve(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'approved'
        ]);

        return redirect()
            ->back()
            ->with(
                'success',
                'Reservasi berhasil disetujui'
            );
    }

    public function reject(Reservation $reservation)
    {
        $reservation->update([
            'status' => 'rejected'
        ]);

        return redirect()
            ->back()
            ->with(
                'success',
                'Reservasi berhasil ditolak'
            );
    }
}
