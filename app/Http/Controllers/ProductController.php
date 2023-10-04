<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detailProduct()
    {
        return view('products.detail');
    }
    public function listProducts()
    {
        return view('products.products');
    }
}
