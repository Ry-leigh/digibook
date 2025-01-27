<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserAchievement extends Model
{
    protected $fillable = ['user_id', 'visit_dictionary', 'visit_about'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
