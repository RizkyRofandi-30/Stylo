<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    
}
