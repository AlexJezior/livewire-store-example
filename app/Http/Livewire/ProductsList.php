<?php

namespace App\Http\Livewire;

use App\Http\Resources\ProductsResource;
use App\Product;
use App\Services\ShoppingCartService;
use App\ShoppingCart;
use Livewire\Component;

class ProductsList extends Component
{
    /** @var string */
    public $product_search = '';

    public $product_quantities = [];

    public function addToCart($product_id)
    {
        $this->validate([
            'product_quantities.'.$product_id => 'required'
        ]);

        app(ShoppingCartService::class)
            ->addItemToCart($product_id, $this->product_quantities[$product_id]);


        $this->product_quantities[$product_id] = 0;
    }

    public function render()
    {
        $products = Product::search($this->product_search)->get();

        $products->each(function ($product) {
            if (empty($this->product_quantities[ $product->id ])) {
                $this->product_quantities[ $product->id ] = 0;
            }
        });

        return view('livewire.products-list', [
            'products' => ProductsResource::collection($products)
        ]);
    }
}
