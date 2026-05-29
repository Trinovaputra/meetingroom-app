<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::latest()->get();

        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request
                ->file('photo')
                ->store('rooms', 'public');
        }
        Room::create($data);

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Ruangan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomRequest $request, Room $room)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            if ($room->photo) {
                Storage::disk('public')
                    ->delete($room->photo);
            }
            $data['photo'] = $request
                ->file('photo')
                ->store('rooms', 'public');
        }
        $room->update($data);

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Ruangan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        if ($room->photo) {

            Storage::disk('public')
                ->delete($room->photo);
        }

        $room->delete();

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Ruangan berhasil dihapus');
    }
}
