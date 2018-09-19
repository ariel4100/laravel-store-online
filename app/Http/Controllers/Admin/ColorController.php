<?php

namespace App\Http\Controllers\Admin;

use App\Model\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    public function index()
    {
        $allColor = Color::all();
        return view('admin.products.colors.index',compact('allColor'));
    }

    public function store(Request $request)
    {
        $color = new Color();
        $color->name_color = $request->name_color;
        $color->save();
        return redirect()->route('color');
    }

    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        return redirect()->route('color');
    }
}
