<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ], [
            'liked' => $liked
        ]);
    }

    public function dislike($user)
    {
        return $this->like($user, false);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
