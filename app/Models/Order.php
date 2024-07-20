<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'no_invoice', 'address_id', 'shipping_cost', 'total_price_product', 'payment_confirmation_image', 'status',];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // In Order.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_items')
                    ->withPivot('quantity');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'order_items')
                    ->withPivot('quantity');
    }

    public function addressUser()
    {
        return $this->belongsTo(AddressUser::class, 'address_id');
    }
}
