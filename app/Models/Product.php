<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_img',
        'product_name',
        'product_price',
        'product_desc',
        'category'
    ];

    public function dataQuantities(): HasMany
    {
        return $this->hasMany(Quantity::class,'product_id', 'product_id');
    }


    
}
