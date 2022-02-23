<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nav()
    {
        return $this->belongsTo(nav::class);
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($page)
        {
            $page->user_id = auth()->user()->id;
        });
    }
}
