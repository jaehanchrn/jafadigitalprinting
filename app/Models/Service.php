<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['print_type', 'size', 'paper_type', 'quantity', 'price', 'print_images'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
