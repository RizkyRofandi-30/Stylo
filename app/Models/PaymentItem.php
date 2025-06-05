<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentItem extends Model
{
    protected $table = 'payment_items';
    protected $primaryKey = 'id';
    protected $fillable = [
        'payment_id',
        'product_id',
        'product_img',
        'product_name',
        'size',
        'quantity',
        'price_item',
        'packet_status'
    ];

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'payment_id');
    }
}
