<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(poll_possible_answers::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
