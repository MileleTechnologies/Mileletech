<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'application_type',
        'position',
        'message',
        'cv_path',
        'status',
        'reviewed_at',
    ];
}
