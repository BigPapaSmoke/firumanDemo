<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Product::select('product_name', 'category_id', 'supplier_id', 'product_code', 'product_image', 'product_store', 'buying_date',   'selling_price')->get();
    }
}
