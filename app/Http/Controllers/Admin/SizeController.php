<?php

namespace App\Http\Controllers\Admin;

use App\Model\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSize = Size::all();
        return view('admin.products.sizes.index',compact('allSize'));
    }

    public function store(Request $request)
    {
        $color = new Size();
        $color->letter = $request->letter;
        $color->number = $request->number;
        $color->save();
        return redirect()->route('size');
    }

    public function destroy($id)
    {
        $color = Size::find($id);
        $color->delete();
        return redirect()->route('size');
    }
}
