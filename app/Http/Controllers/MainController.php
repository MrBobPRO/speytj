<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function home()
  {
    $popularProducts = Product::where('popular', true)->inRandomOrder()->take(8)->get();
    $latestPosts = Post::latest()->take(4)->get();

    return view('pages.home', compact('popularProducts', 'latestPosts'));
  }

  public function search(Request $request)
  {
    $keyword = $request->keyword;

    $products = Product::where('title', 'LIKE', '%' . $keyword . '%')
      ->orWhere('description', 'LIKE', '%' . $keyword . '%')
      ->orWhere('composition', 'LIKE', '%' . $keyword . '%')
      ->get();

    $posts = Post::where('title', 'LIKE', '%' . $keyword . '%')
      ->get();

    return view('menu.search-results', compact('products', 'posts'));
  }
}
