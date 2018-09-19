<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';


    public function category()
    {
        return $this->belongsTo(Category::class,'category_id_pro');
    }
    public function color(){
        return $this->hasMany('App\Model\Color');
    }
    public function size(){
        return $this->hasMany('App\Model\Size');
    }
}
