<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll_possible_answers extends Model
{
    use HasFactory;

    public function poll()
    {
        return $this->belongsTo(poll::class);
    }
    public function answers()
    {
        return $this->hasMany(poll_possible_answers::class, "id");
    }
}
