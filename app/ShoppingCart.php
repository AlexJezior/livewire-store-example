<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //////////////
    /// SCOPES ///
    //////////////

    public function scopeNotPurchased($query)
    {
        return $query->whereNull('purchased');
    }

    /////////////////////
    /// RELATIONSHIPS ///
    /////////////////////

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(ShoppingCartItem::class);
    }
}
