<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\ProductColor;
use App\Model\ProductImage;
use App\Model\ProductSize;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allCat = Category::all();
        $category = $request->get('categories');
        $items = Product::orderBy('id_product','DESC')
            ->where('status_pro','ACTIVO')
            ->where('category_id_pro','LIKE',"%$category%")->get();
        return view('item.index',compact('items','allCat'));
    }

    public function show($id)
    {
        $color = ProductColor::where('product_id',$id)->get();
        $size = ProductSize::where('product_id',$id)->get();
        $galery = ProductImage::where('product_id_img',$id)->get();
        $productos = Product::where('status_pro','ACTIVO')->where('id_product',$id)->first();
        return view('item.show',compact('productos','size','color','galery'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
