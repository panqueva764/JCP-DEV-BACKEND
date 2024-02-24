<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'platform', 'duration', 'level', 'language', 'knowledge_type', 'pdf_url', 'enabled'];
}
