<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\ProductColor;
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
            ->where('category_id_pro','LIKE',"%$category%")->paginate(5);
        return view('item.index',compact('items','allCat'));
    }

    public function show($id)
    {
        $color = ProductColor::where('product_id',$id)->get();
        $size = ProductSize::where('product_id',$id)->get();
        $item = Product::where('status_pro','ACTIVO')->where('id_product',$id)->first();
        return view('item.show',compact('item','size','color'));
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
