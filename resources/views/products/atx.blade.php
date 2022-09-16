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
  ATX классификация
</li>

<li>
  {{ $activeCategory->title }}
</li>
@endsection

@section('main')
<div class="atx-page">
  <div class="atx-page__inner">
    <section class="atx-section">
      <div class="atx-section__inner main-container">
        <h1 class="atx-title main-title">{{ $activeCategory->title }}</h1>

        <div class="atx-section__divider">
          <ul class="classifications-list">
            @foreach ($categories as $category)
              <li>
                <a class="classifications-list__link @if($category->slug == $activeCategory->slug) classifications-list__link--active @endif" href="{{ route('products.atx', $category->slug) }}">{{ $category->title }}</a>
              </li>
            @endforeach
          </ul>

          <x-products-list class="atx-products-list" :products="$products" />
        </div>
      </div>
    </section>

  </div>
</div>

@endsection
