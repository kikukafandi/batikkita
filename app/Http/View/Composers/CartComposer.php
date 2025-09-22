<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Cart;

class CartComposer
{
    /**
     * Bagikan data ke semua view.
     */
    public function compose(View $view)
    {
        $cartCount = 0;

        if (auth()->check()) {
            $cart = Cart::with('items')
                ->where('user_id', auth()->id())
                ->first();

            $cartCount = $cart ? $cart->items->sum('quantity') : 0;
        }

        $view->with('cartCount', $cartCount);
    }
}
