<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Util\Json;

class ImageController extends Controller
{
    public function saveimage(Request $request)
    {
        $file = $request->file('file');
        $idproducto = $request->id_product;
        if ($idproducto)
        {
            $productImage = new ProductImage();
            $productImage->product_id_img =
            $productImage->pics = $filename;
            $productImage->save();
        }
        $filename = uniqid() . $file->getClientOriginalName();

        $file->move('gallery/images', $filename);

        $productImage = new ProductImage();
        $productImage->product_id_img =
        $productImage->pics = $filename;
        $productImage->save();

        return response()->json('aca');
    }
}
