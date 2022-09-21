@extends('layouts.app')

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
<div class="nosology-page">
  <div class="nosology-page__inner">
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

          <x-products-list class="nosology-products-list" :products="$products" />
        </div>
      </div>
    </section>

  </div>
</div>

@endsection
