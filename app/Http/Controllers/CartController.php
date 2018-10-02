<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct()
    {
        if(!Session::has('cart'))
        {
            Session::put('cart',array());
            Session::put('option',array());
        }
    }

    public function index()
    {
        $cart = Session::get('cart');
        $option = Session::get('option');

        $total = 0;

        return view('cart.cart', compact('cart','option','total'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->id_product);
        $cart = Session::get('cart');
        $opt = Session::get('option');
        $car = $request->only('size','color','quantity','id_product');
        if (!$opt)
        {
            $opt[] = $car;
            Session::put('option',$opt);
            var_dump('sale por aca');
        }
        foreach ($opt as $key=>$item)
        {
            if ($item['size'] == $request->size && $item['color'] == $request->color && $item['id_product'] == $request->id_product)
            {
                //$item['quantity'] += $request->quantity;
                unset($opt[$key]);
                //$opt[$key] = $item;

            }
        }
        $opt[] = $car;

        Session::put('option',$opt);

        $cart[$product->id_product] = $product;

        Session::put('cart',$cart);
        return redirect()->route('cart');
    }

    public function option()
    {
       /* $cart = Session::get('option');
        $total = array();
        foreach($cart as $item)
        {
            array_push($total , $item['cart']);
        }
        return $total;*/
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $opt = Session::get('option');
        foreach ($opt as $key=>$item)
        {
            if ($item['id_product'] == $product->id_product)
            {
                $item['quantity'] = $request->cantidad;
                $opt[$key] = $item;
            }
          
        }
        Session::put('option',$opt);
        Session::get('option');
        //return compact('c');
        return redirect()->route('cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $cart = Session::get('cart');
        $opt = Session::get('option');
        foreach ($opt as $key=>$item)
        {
            if ($product->id_product == $item['id_product'])
            {
                unset($opt[$key]);
                //dd($opt);
            }
        }
        unset($cart[$product->id_product]);
        Session::put('cart',$cart);
        Session::put('option',$opt);
        return redirect()->route('cart');
    }

    public function clear()
    {
        Session::flush('cart');
        return redirect()->route('cart');
    }

    //Detalle del pedido
    public function orderDetail()
    {
        if(count(Session::get('cart')) <= 0) return redirect()->route('home');
        $cart = Session::get('cart');
        $option = Session::get('option');
        $totqty = 0;
        foreach ($cart as $item)
        {
            foreach ($option as $data)
            {
                if ($item->id_product == $data['id_product'])
                {
                    $totqty += $data['quantity'];
                }
            }
        }

        //$pedido= array_merge($option,$cart);
        $total = $this->total();
        return view('cart.order-detail',compact('cart','option','total','totqty'));
    }
    public function saveOrder()
    {
        $pedido = new Order();
        $cart = Session::get('cart');
        foreach ($cart as $item)
        {
            $pedido->user_id = Auth::id();
            $pedido->product_id = $item->id;
            $pedido->quantity = $item->quantity;
            $pedido->price = $item->price;
        }
        $pedido->total = $this->total();
        $pedido->save();
        return redirect()->route('productos.get')->with('success','pedido exitosamente rebice su email Gracias :]');
        //return 'jjjjj'. dd($cart);
    }
}
