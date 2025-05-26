<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quantity extends Model
{
    protected $table = 'quantities';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'size',
        'quantity'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
