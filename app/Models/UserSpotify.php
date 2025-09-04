<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSpotify extends Model
{
    protected $table = 'users_spotify';

    protected $fillable = [
        'user_id',
        'spotify_user_id',
        'access_token',
        'refresh_token',
        'expires_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
