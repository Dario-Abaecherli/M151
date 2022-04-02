<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessioncart_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'product_id',
        'sessioncart_id',
    ];

    function sessioncart()
    {
        return $this->belongsTo(Sessioncart::class);
    }

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
