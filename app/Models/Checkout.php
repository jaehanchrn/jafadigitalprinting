<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'payment_proof',
        'total_price_product',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(AddressUser::class, 'address_id');
    }
}
