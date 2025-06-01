<?php

namespace App\Http\View\Composers;

use App\Models\CartItem;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CartComposer
{
    public function compose(View $view)
    {
        $cartItemsCount = 0;
        
        if (Auth::check()) {
            $cartItemsCount = CartItem::whereHas('cart', function ($query) {
                $query->where('user_id', Auth::id());
            })->count();
        }
        $view->with('cartItemsCount', $cartItemsCount);
    }
}