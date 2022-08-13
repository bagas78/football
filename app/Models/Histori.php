<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    use HasFactory;

    protected $table = "histori";

    protected $fillable = [
        'histori_team',
        'histori_jadwal',
        'histori_pekan',
        'histori_pertandingan',
        'histori_musim',
        'histori_status',
    ];
}
