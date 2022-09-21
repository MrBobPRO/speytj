<?php

namespace App\Http\Controllers;

use App\Models\Atx;
use Illuminate\Http\Request;

class AtxController extends Controller
{
  public function show($slug)
  {
    $activeCategory = Atx::where('slug', $slug)->firstOrFail();
    $products = $activeCategory->products()->paginate(15);

    $categories = Atx::orderBy('title')->get();

    return view('products.atx', compact('activeCategory', 'products', 'categories'));
  }
}
