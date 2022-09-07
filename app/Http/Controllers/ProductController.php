<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $newProducts = Product::latest()->take(8)->get();
    $productsCount = Product::all()->count();

    return view('products.index', compact('newProducts', 'productsCount'));
  }

  public function all()
  {
    $products = Product::orderBy('title')->paginate(6);
    $allProducts = Product::orderBy('title')->select('title', 'slug')->get();

    // get all letters
    $letters = [];

    foreach($allProducts as $prod) {
        array_push($letters, mb_substr($prod->title, 0, 1));
    }

    // remove duplicates letters
    $letters = array_unique($letters);

    return view('products.all', compact('products', 'allProducts', 'letters'));
  }

  public function show($slug)
  {
    $product = Product::where('slug', $slug)->firstOrFail();

    return view('products.show', compact('product'));
  }
}
