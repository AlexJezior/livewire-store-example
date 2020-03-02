<?php

namespace App\Http\Livewire;

use App\Http\Resources\ShoppingCartResource;
use Livewire\Component;

class ProductCart extends Component
{
    public function render()
    {
        $shopping_cart = auth()->user()->shoppingCarts()->with(['items.product'])
            ->notPurchased()->first();
        return view('livewire.product-cart', [
            'shopping_cart' => new ShoppingCartResource($shopping_cart)
        ]);
    }
}
