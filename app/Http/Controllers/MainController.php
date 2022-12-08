<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function test()
  {
    $serverDate = date('d:m:Y H:i:s');
    $localDate = gmdate('d:m:Y H:i:s');

    return 'Server date: ' . $serverDate . '<br>' . 'Local date:' . $localDate;
  }

  // Вычисляет timestamp в Гринвиче, который соответствует
  // локальному timestamp-формату
  private function local2gm($localStamp = false)
  {
    if ($localStamp === false) {
      $localStamp = time();
    }

    // Получаем смещение часовой зоны в секундах
    $tzOffset = date("Z", $localStamp);
    // Вычитаем разницу - получаем время по GMT
    return $localStamp - $tzOffset;
  }

  // Вычисляет локальный timestamp в Гринвиче, который
  // соответствует timestamp-формату по GMT. Можно указать
  // смещение локальной зоны относительно GMT (в часах),
  // тогда будет осуществлен перевод в эту зону
  // (а не в текущую локальную).
  private function gm2local($gmStamp = false, $tzOffset = false)
  {
    if ($gmStamp === false) return time();
    // Получаем смещение часовой зоны в секундах
    if ($tzOffset === false)
      $tzOffset = date("Z", $gmStamp);
    else
      $tzOffset *= 60 * 60;
    // Вычитаем разницу - получаем время по GMT
    return $gmStamp + $tzOffset;
  }

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

  public function uploadSimditorImage(Request $request)
  {
    $file = $request->file('image');
    $filename = uniqid() . '.' . $file->getClientOriginalExtension();

    $path = public_path('img/simditor/' . $request->folder);
    $file->move($path, $filename);

    return [
      "success" => true,
      "msg" => "success",
      "file_path" => '/img/simditor/' . $request->folder . '/' . $filename
    ];
  }
}
