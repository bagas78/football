<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    use HasFactory;

    protected $table = "skor";

    protected $fillable = [
        'skor_team',
        'skor_musim',
        'skor_jadwal',
        'skor_nilai',
        'skor_poin',
        'skor_bobol',
    ];
}
