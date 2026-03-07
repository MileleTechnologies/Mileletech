<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerOpportunity extends Model
{
    protected $fillable = [
        'section',
        'label',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
