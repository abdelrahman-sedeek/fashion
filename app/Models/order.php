<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $guarded = ' ';
    use HasFactory;
    public function product()
    {
        return $this->belongsToMany(product::class,'orders_products');
    
    }
}
