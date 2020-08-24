<?php

namespace App\Http\Controllers\discount;

use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    //
    public function discountIndex()
    {
        return view("layout.discount");
    }
}
