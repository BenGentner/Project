<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(Poll_possible_answers::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($poll)
        {
            $poll->user_id = auth()->user()->id;
        });
    }
}
