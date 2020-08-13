<?php

namespace App\Http\Controllers\discount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    //
    public function discountIndex()
    {
        return view("layout.discount");
    }
}