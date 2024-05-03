<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employees extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;

    protected $table = 'employee';

    protected $fillable = [
        'email',
        'password',
        'roleID',
        'applicationID',
        'gameID',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(Applications::class, 'applicationID');
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Roles::class, 'roleID');
    }

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'gameID');
    }
}
