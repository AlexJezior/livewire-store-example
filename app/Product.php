<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //////////////
    /// SCOPES ///
    //////////////

    public function scopeSearch($query, $search_param)
    {
        return $query->where('name', 'LIKE', '%'.$search_param.'%')
            ->orWhere('slug', 'LIKE', '%'.$search_param.'%')
            ->orWhere('description', 'LIKE', '%'.$search_param.'%');
    }
}
