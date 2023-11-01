<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index(){
        $products = Product::get();
        $categories = Category::get();
        return view('index', compact('products', 'categories'));
    }
    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }
    public function product($category, $productCode = null){
        $products = Product::get();
        $categories = Category::get();
        $product = Product::where('code', $productCode)->first();
        return view('product', compact('categories', 'productCode','category', 'products', 'product'));
    }
}
