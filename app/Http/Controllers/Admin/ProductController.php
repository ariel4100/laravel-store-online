<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Color;
use App\Model\Product;
use App\Model\ProductColor;
use App\Model\ProductImage;
use App\Model\ProductSize;
use App\Model\ProductVariants;
use App\Model\Size;
use App\Model\Sizes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $pro = Product::orderBy('id_product','DESC')
        ->where('name_pro','LIKE',"%$name%")->paginate(5);
        return view('admin.products.index',compact('pro'));
    }

    public function filter(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allColor = Color::all();
        $allSize = Size::all();
        $allCat = Category::all();
        return view('admin.products.create',compact('allCat','allSize','allColor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image_pro');
        $slug = str_slug($request->name_pro);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalName();

            if (!file_exists('uploads/Products'))
            {
                mkdir('uploads/Products',0777,true);
            }
            $image->move('uploads/Products',$imagename);
        }else{
            $imagename = "default.png";
        }
        $pro = new Product();
        $pro->name_pro = $request->name_pro;
        $pro->slug_pro = str_slug(Auth::user()->name.' '.$request->name_pro,'-');
        $pro->description_pro = $request->name_pro;
        $pro->category_id_pro = $request->category;
        $pro->price_pro = $request->price_pro;
        $pro->quantity_pro = $request->quantity_pro;
        $pro->image_pro = $imagename;
        $pro->status_pro = $request->status_pro;
        $pro->save();
        //buscar el ultimo id del producto
        $p = Product::all('id_product');
        $idUltimo = $p->last();

        $size = $request->get('size');
        $color = $request->get('color');
        foreach ($size as $item){
            ProductSize::create([
                'size_id' => $item,
                'product_id' => $idUltimo->id_product,
                'status' => 'ACTIVO'
            ]);
        }
        foreach ($color as $item){
            ProductColor::create([
                'color_id' => $item,
                'product_id' => $idUltimo->id_product,
                'status' => 'ACTIVO'
            ]);
        }
        $files = $request->file('galery');
        $patch = public_path().'/uploads/Products/'.$idUltimo->id_product.'/'; //Directorio para subir imagenes
        if($files)
        {
            foreach ($files as $key=>$file) {
                $fileName = $file->getClientOriginalName();
                ProductImage::create([
                    'product_id_img' => $idUltimo->id_product,
                    'pics' => 'uploads/Products/' . $idUltimo->id_product . '/' . $fileName,
                ]);
                $file->move($patch, $fileName);
            }
        }
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Product::find($id);
        $allCat = Category::all();
        return view('admin.products.edit',compact('pro','allCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro = Product::find($id);
        $image = $request->file('image_pro');
        $slug = str_slug($request->name_pro);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/Products'))
            {
                mkdir('uploads/Products',0777,true);
            }
            $image->move('uploads/Products',$imagename);
        }else{
            $imagename = $pro->image_pro;
        }
        $pro->name_pro = $request->name_pro;
        $pro->description_pro = $request->name_pro;
        $pro->category_id_pro = $request->category;
        $pro->price_pro = $request->price_pro;
        $pro->quantity_pro = $request->quantity_pro;
        $pro->image_pro = $imagename;
        $pro->status_pro = $request->status_pro;
        $pro->update();
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::find($id);
        if (file_exists('uploads/Products/'.$pro->image_pro))
        {
            unlink('uploads/Products/'.$pro->image_pro);
        }
        $pro->delete();
        return redirect()->back();
    }
}
