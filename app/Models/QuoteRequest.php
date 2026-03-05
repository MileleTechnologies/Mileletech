<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'service',
        'message',
        'status',
        'reviewed_at',
    ];
}
