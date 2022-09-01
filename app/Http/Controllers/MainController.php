<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function home()
  {
    $popularProducts = Product::where('popular', true)->take(8)->get();

    return view('pages.home', compact('popularProducts'));
  }
}
