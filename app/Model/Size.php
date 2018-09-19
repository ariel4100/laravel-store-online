<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $primaryKey = 'id_size';

    public function productSize()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(ProductSize::class);

    }

}
