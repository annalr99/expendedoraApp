<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\UserController;

class ProductController extends Controller
{
    public function showProducts(){
        $products = Product::query()->get();
        return view('home', array('products'=>$products));
    }

    public function detailProduct(Request $request){
        $detailProduct = Product::where('id', $request->id)->get();
        $array = array('detailProduct'=>$detailProduct);
        return view('product', array('detailProduct'=>$detailProduct[0]));
    }
}