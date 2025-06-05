<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'address',
        'postal_code',
        'total_price',
        'cart_id'
    ];

    public function paymentItems(): HasMany{
        return $this->hasMany(PaymentItem::class, 'payment_id', 'payment_id');
    }

}
