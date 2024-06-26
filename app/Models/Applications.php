<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function role(): BelongsTo
    {
        return $this->belongsTo(Roles::class, 'roleID');
    }
}
