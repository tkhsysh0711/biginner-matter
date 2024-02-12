<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;
    protected $fillable={
        'rest_start', 'rest_end',
    }

    protected $guarded={
        'id', 'created_at', 'updated_at',
    }
}
