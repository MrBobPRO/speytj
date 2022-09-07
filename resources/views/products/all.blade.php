@extends('layouts.app')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  <a href="{{ route('products.index') }}">Продукты</a>
</li>

<li>
  Все продукты
</li>
@endsection

@section('main')
<div class="all-products-page">
  <div class="all-products-page__inner">
    <section class="all-products-section">
      <div class="all-products-section__inner main-container">
        <h1 class="all-products-title main-title">Все продукты</h1>

        <div class="products-filter">
          <div class="products-filter__search">
            <div class="products-selectize-container">
              <select class="products-selectize selectize--linked" id="products-selectize" placeholder="Поиск препаратов...">
                <option></option>
                @foreach ($allProducts as $product)
                  <option value="{{ $product->slug }}">{{ $product->title }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="filter-by-letter">
            <h2 class="filter-by-letter__title">Фильтр по буквам:</h2>
            <ul class="filter-by-letter__list">
              @foreach ($letters as $letter)
                <li>
                  <a href="{{ route('products.all') }}@if($activeLetter != $letter)?letter={{ $letter }}@endif" class="filter-by-letter__link @if($activeLetter == $letter) filter-by-letter__link--active @endif">{{ $letter }}</a>
                </li>
              @endforeach
            </ul>
          </div>

        </div>

        <x-products-list class="all-products-list" :products="$products" />
      </div>
    </section>

  </div>
</div>

@endsection
