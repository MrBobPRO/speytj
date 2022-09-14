<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ScienceController extends Controller
{
  public function index()
  {
    $categories = Category::scientific()->orderBy('title')->get();
    $latestPosts = Post::scientific()->latest()->take(4)->get();

    return view('science.index', compact('categories', 'latestPosts'));
  }
}
