<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InnovationProposal extends Model
{
    protected $fillable = [
        'name',
        'organization',
        'email',
        'phone',
        'innovation_area',
        'project_idea',
        'status',
    ];
}
