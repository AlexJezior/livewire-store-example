<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShoppingCartItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'shopping_cart' => $this->whenLoaded($this->shoppingCart, new ShoppingCartResource($this->shoppingCart)),
            'product' => $this->whenLoaded($this->product, new ProductsResource($this->product)),
            'quantity' => $this->quantity
        ];
    }
}
