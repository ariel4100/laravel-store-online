<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $table = 'product_color';
    //protected $primaryKey = 'id';

    protected $fillable = [
        'color_id','product_id','status'
    ];

    public function color()
    {
        return $this->belongsTo(Color::class,'color_id');
    }
}
