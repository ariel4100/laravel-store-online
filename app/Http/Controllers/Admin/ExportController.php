<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CategoriesExport;
use App\Exports\ColorExport;
use App\Exports\ProductsExport;
use App\Exports\SizeExport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function user()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function product()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
    public function category()
    {
        return Excel::download(new CategoriesExport, 'categories.xlsx');
    }
    public function size()
    {
        return Excel::download(new SizeExport, 'size.xlsx');
    }
    public function color()
    {
        return Excel::download(new ColorExport, 'color.xlsx');
    }
    public function order()
    {
        return Excel::download(new UsersExport, 'order.xlsx');
    }
}
