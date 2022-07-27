<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class current extends Model
{
    use HasFactory;

    protected $table = "current";

    protected $fillable = [
        'current_pekan',
        'current_arr',
        'current_lost',
        'current_minus',
    ];
}
