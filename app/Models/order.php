<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    protected $guarded = '';
    use HasFactory;
   
    public function OrderItems()
    {
        return $this->hasMany(OrderItems::class);
    
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    
    }
}
