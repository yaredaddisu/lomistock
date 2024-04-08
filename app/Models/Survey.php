<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Category;
use App\Models\StockIn;
use App\Models\TempCart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory ;


    protected $fillable = ['user_id', 'productName','barCode', 'image','purchasePrice',
    'salesPrice', 'category_id','quantity', 'code', 'size','status',
   'color', 'brand','status' ];

   public function stocks()
   {
       return $this->hasMany(StockIn::class);
   }
   public function stockOut()
   {
       return $this->hasMany(Cart::class);
   }
   public function products()
   {
       return $this->hasMany(Cart::class);
   }
   public function user()
    {
           return $this->belongsTo(User::class);
    }
   public function temps()
   {
       return $this->hasMany(TempCart::class);
   }


   public function category() {
    return $this->belongsTo(Category::class, 'category_id');
}

public function getWarehouseAttribute()
{
    return $this->user->house->id;
}
public function getCreator()
{
    return $this->user->name;
}
public function scopeWithFilters($query, $categories)
    {
        return $query
            ->when(count($categories), function ($query) use ($categories) {
                $query->whereIn('category_id', $categories);
            });
    }


}
