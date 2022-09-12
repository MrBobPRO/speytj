<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ScienceController extends Controller
{
  public function index()
  {
    $categories = Category::where('scientific', true)->orderBy('title')->get();

    return view('science.index', compact('categories'));
  }
}
