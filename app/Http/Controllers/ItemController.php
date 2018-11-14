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
        return response()->json(['items' => $items,'cat' => $allCat]);
    }
    public function item(){
        return view('item.index');
    }
    public function show(){
        return view('item.show');
    }

    public function modalCart(Request $request)
    {
        $color = ProductColor::where('product_id',$request->id_product)->get();
        $colores = array();
        foreach ($color as $data)
        {
            array_push($colores, $data->color->name_color);
        }
        $size = ProductSize::where('product_id',$request->id_product)->get();
        $talles = array();
        foreach ($size as $data)
        {
            array_push($talles, $data->size->number);
        }
        $galery = ProductImage::where('product_id_img',$request->id_product)->get();
        $productos = Product::where('status_pro','ACTIVO')->where('id_product',$request->id_product)->first();
        return response()->json(['items' => $productos,'color' => $colores,'size' => $talles,'images' => $galery ]);
        //return redirect()->route('detail-item');
        //return view('item.show',compact('productos','size','color','galery'));
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
