<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessioncart extends Model
{
    use HasFactory;

    protected $fillable = [
        'sessioncart_date',
        'description',
        'user_id',
    ];

    function sessioncart_detail()
    {
        return $this->hasMany(Sessioncart_detail::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
