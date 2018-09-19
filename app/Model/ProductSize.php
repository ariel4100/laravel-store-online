<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $table = 'product_size';

    protected $fillable = [
        'size_id','product_id','status'
    ];

    public function size()
    {
        return $this->belongsTo(Size::class,'size_id');
    }
}
