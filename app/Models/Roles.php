<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'roleName',
        'availability',
        'positionSummary',
        'essentialDuties',
        'qualifications',
        'educational',
        'salaryRange',
        'special',
        'work',
        'relation',
    ];
}
