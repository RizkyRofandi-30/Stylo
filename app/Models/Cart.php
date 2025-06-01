<?php

namespace App\Models;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{   
    protected $table = 'carts';
    protected $fillable = ['user_id'];

    protected $primaryKey = 'cart_id';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

   public function items(): HasMany
    {
        return $this->hasMany(CartItem::class, 'cart_id', 'cart_id');
    }

}

