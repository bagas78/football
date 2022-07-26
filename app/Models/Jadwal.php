<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = "jadwal";

    protected $fillable = [
        'jadwal_team',
        'jadwal_pekan',
        'jadwal_pertandingan',
        'jadwal_musim',
        'jadwal_status',
    ];
}
