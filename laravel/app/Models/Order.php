<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'description',
        'user_id',
    ];

    function order_detail()
    {
        return $this->hasMany(Order_detail::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
