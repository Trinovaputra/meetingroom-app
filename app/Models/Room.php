<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Room extends Model
{
    protected $fillable = [
        'nama_ruangan',
        'kapasitas',
        'lokasi',
        'fasilitas',
        'photo',
        'status'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
