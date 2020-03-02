<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShoppingCartResource extends JsonResource
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
            'user' => $this->whenLoaded($this->user, new UserLoginResource($this->user)),
            'purchased' => $this->purchased,
            'items' => $this->whenLoaded($this->items, ShoppingCartItemResource::collection($this->items))
        ];
    }
}
