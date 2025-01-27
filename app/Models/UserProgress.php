<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserProgress extends Model
{
    protected $fillable = ['user_id', 'finished'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
