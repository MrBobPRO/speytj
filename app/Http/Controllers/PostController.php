<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Support\Helper;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function show($slug)
  {
    $post = Post::where('slug', $slug)->firstOrFail();

    $previousRoute = Helper::getPreviousRouteName();

    return view('posts.show', compact('post', 'previousRoute'));
  }
}
