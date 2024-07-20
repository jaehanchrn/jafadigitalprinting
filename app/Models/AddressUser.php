<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddressUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pricelist_id',
        'address',
        'zip_code',
    ];

    // Definisikan relasi jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pricelist()
    {
        return $this->belongsTo(Pricelist::class);
    }
    
}
