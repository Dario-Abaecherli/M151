<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    function order()
    {
        return $this->hasMany(Order::class);
    }

    function town()
    {
        return $this->belongsTo(Town::class);
    }
}
