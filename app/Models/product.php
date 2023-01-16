<?php

namespace App\Models;

use App\Models\cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $guarded = '';
    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    
    }
    public function order()
    {
        return $this->belongsToMany(order::class,'orders_products');
    
    }
    public function cart()
    {
        return $this->hasMany(cart::class);
    }
}
