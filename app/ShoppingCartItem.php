<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCartItem extends Model
{
    /////////////////////
    /// RELATIONSHIPS ///
    /////////////////////

    public function shoppingCart()
    {
        return $this->belongsTo(ShoppingCart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
