<?php

namespace App\Models;

use App\Models\User;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','category'];

  
    public function products() {
        return $this->hasMany(Survey::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
 
}
