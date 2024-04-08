<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $fillable = [ 'name',
    'location',
    'capacity',
    'description', ];

    public function users() {
        return $this->hasMany(User::class);
    }
 public function purchases() {
        return $this->hasMany(Purchase::class);
    }

  public function carts() {
        return $this->hasMany(Cart::class);
    }
}
