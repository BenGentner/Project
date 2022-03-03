<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll_answers extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function answer()
    {
        return $this->belongsTo(poll_possible_answers::class,  "answer_id");
    }
}
