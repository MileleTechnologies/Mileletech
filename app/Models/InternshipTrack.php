<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternshipTrack extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
