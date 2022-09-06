<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::orderBy('title')->paginate(16);
    $newProducts = Product::latest()->take(8)->get();

    return view('products.index', compact('products', 'newProducts'));
  }

  public function show($slug)
  {
    $product = Product::where('slug', $slug)->firstOrFail();

    return view('products.show', compact('product'));
  }
}
