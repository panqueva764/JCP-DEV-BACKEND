<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'position', 'duration', 'language', 'description', 'level'];

    protected $casts = [
        'language' => 'array', // Define el campo 'language' como un array
    ];
}
