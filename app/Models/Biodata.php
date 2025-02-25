<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = [
        'name',
        'tanggal_lahir',
        'umur',
        'image',
    ];
}
