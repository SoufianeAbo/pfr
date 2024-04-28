<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $table = 'application';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'city',
        'resume',
        'picture',
        'coverLetter',
        'country',
        'linkedinProfile',
        'portfolio',
        'source',
        'salaryExpectation',
        'roleID',
        'status',
    ];
}
