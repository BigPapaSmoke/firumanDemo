<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Product([
            'product_name' => $row[0],
            'category_id' => $row[1],
            'supplier_id' => $row[2],
            'product_code' => $row[3],
            'buying_date' => $row[4],
            'buying_price' => $row[5],
            'selling_price' => $row[6],
        ]);
    }
}
