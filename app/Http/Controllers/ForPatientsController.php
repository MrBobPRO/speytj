<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class ForPatientsController extends Controller
{

  public function index()
  {
    $latestVideos = Video::latest()->take(3)->get();
    $latestPosts = Post::forPatients()->latest()->take(4)->get();

    return view('for-patients.index', compact('latestVideos', 'latestPosts'));
  }

  public function videos()
  {
    $videos = Video::latest()->paginate(12);

    return view('for-patients.videos', compact('videos'));
  }

  public function posts()
  {
    $categories = Category::forPatients()->orderBy('title')->get();
    $latestPosts = Post::forPatients()->latest()->take(4)->get();

    return view('for-patients.posts', compact('categories', 'latestPosts'));
  }

  public function showCategory($slug)
  {
    $category = Category::where('slug', $slug)->firstOrFail();
    $posts = $category->posts()->where('for_patients', true)->get();

    return view('category.index', compact('category', 'posts'));
  }
}
