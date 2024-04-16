<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    public function index(){
        $products = "Product list form in ProductController";
    return view('products.index', ['products'=>$products]);
    }
    public function create()
    {
        return view('products.create');
    }
}
