<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\User;
use App\Models\TempPrint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Details extends Model
{

    protected $fillable = [ 
        'amount',
        'tax',
        'shipping',
        'discount',
        'TotalQuantity',
        'TotalProduct',
        'Reference',
        'user_id',
        'name',
    'email',
    'phone',
    'address',
    'status',
    'paymentMethod',
    'PayedAmount',
'Tin',
'Vat',
'Note',
'Due'

    ]; 
    use HasFactory;

    public function questions()
{
    return $this->hasMany(Cart::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
