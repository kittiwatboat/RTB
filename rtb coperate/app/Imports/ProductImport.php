<?php

namespace App\Imports;

use App\productstockModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class ProductImport implements ToModel,  WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new productstockModel([
            "pro_id"=>$row[0],
            "pro_nameen"=>$row[2],
            "variation_combo"=>$row[5],
            "status"=>$row[7],
            "stock"=>$row[8],
            "specialprice"=>$row[9],
            "specialprice_start"=>date("Y-m-d H:i:s",strtotime($row[10])),
            "specialprice_end"=>date("Y-m-d H:i:s",strtotime($row[11])),
            "price"=>$row[12],
            "priceco"=>$row[13]

        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
