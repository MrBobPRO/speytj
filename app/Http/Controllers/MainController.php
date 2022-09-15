<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function home()
  {
    $popularProducts = Product::where('popular', true)->take(8)->get();
    $latestPosts = Post::latest()->take(4)->get();

    return view('pages.home', compact('popularProducts', 'latestPosts'));
  }
}
