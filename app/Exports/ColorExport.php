<?php

namespace App\Exports;

use App\Model\Color;
use Maatwebsite\Excel\Concerns\FromCollection;

class ColorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Color::all();
    }
}
