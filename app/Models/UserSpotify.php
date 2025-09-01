<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
