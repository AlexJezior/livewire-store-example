<?php


namespace App\Services;


use App\Product;
use App\ShoppingCart;
use App\ShoppingCartItem;

class ShoppingCartService
{

    public function __construct()
    {
        // Constructive things go here.
    }

    /**
     * @param $product_id
     * @param $quantity
     */
    public function addItemToCart($product_id, $quantity): void
    {
        $user = auth()->user();

        $shopping_cart = $user->shoppingCarts()->notPurchased()->first()
            ?? $this->createShoppingCart();

        $cart_item = $shopping_cart->items()->firstWhere('product_id', $product_id)
            ?? $this->createCartItem($shopping_cart, $product_id);


        $cart_item->quantity = $quantity;
        $cart_item->save();
    }

    /**
     * @return ShoppingCart
     */
    private function createShoppingCart(): ShoppingCart
    {
        $shopping_cart = new ShoppingCart;

        $shopping_cart->user()->associate(auth()->user());

        $shopping_cart->save();

        return $shopping_cart;
    }

    /**
     * @param ShoppingCart $shopping_cart
     * @param $product_id
     * @return ShoppingCartItem
     */
    private function createCartItem(ShoppingCart $shopping_cart, $product_id): ShoppingCartItem
    {
        $cart_item = new ShoppingCartItem;

        $cart_item->shoppingCart()->associate($shopping_cart);
        $cart_item->product()->associate(Product::find($product_id));

        $cart_item->save();

        return $cart_item;
    }

}
