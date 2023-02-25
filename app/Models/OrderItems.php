<?php

namespace App\Models;

use App\Models\order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItems extends Model
{
    use HasFactory;
    protected $guarded = '';
    public function order()
    {
        return $this->belongsTo(order::class);
    }
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
