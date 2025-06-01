<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    protected $table = 'cart_items';
    protected $primaryKey = 'id';
    protected $fillable = ['cart_id', 'product_id', 'quantity', 'size'];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'cart_id');
    }


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','product_id');
    }
}

