@extends('layouts.app', ['pageClass' => 'nosology-page'])

@section('title', $activeCategory->title)

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  <a href="{{ route('products.index') }}">Продукты</a>
</li>

<li>
  Нозология
</li>

<li>
  {{ $activeCategory->title }}
</li>
@endsection

@section('main')
<section class="nosology-section">
  <div class="nosology-section__inner main-container">
    <h1 class="nosology-title main-title">{{ $activeCategory->title }}</h1>

    <div class="nosology-section__divider">
      <ul class="classifications-list">
        @foreach ($categories as $category)
        <li>
          <a class="classifications-list__link @if($category->slug == $activeCategory->slug) classifications-list__link--active @endif"
            href="{{ route('nosology.show', $category->slug) }}">{{ $category->title }}</a>
        </li>
        @endforeach
      </ul>

      {{-- Mobile start --}}
      <div class="classifications-select only-mobile">
        <div class="selectize-singular-container">
          <select class="selectize--linked">
            @foreach($categories as $category)
            <option value="{{ route('nosology.show', $category->slug) }}" @selected($category->slug == $activeCategory->slug)>{{ $category->title }}</option>
            @endforeach
          </select>
        </div>
      </div> {{-- Mobile end --}}

      <x-products-list class="nosology-products-list" :products="$products" />
    </div>
  </div>
</section>

@endsection
