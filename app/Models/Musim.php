<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musim extends Model
{
    use HasFactory;
    protected $table = "musim";

    protected $fillable = [
        'musim_tahun',
    ];
}
