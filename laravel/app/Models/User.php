<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname',
        'name',
        'email',
        'password',
        'adress',
        'house_number',
        'town_id'
    ];

    function order()
    {
        return $this->hasMany(Order::class);
    }

    function town()
    {
        return $this->belongsTo(Town::class);
    }
}
