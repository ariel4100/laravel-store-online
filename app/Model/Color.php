<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $primaryKey = 'id_color';

    public function productsColor()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(ProductColor::class);
    }
}
