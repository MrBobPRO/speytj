@extends('layouts.app')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  Продукты
</li>
@endsection

@section('main')
<div class="products-page">
  <div class="products-page__inner">
    <section class="products-page__banner main-banner">
      <img class="main-banner__image" src="{{ asset('img/products-page/banner.png') }}" alt="Spey products">
      <div class="main-banner__txt-container">
        <h1 class="main-banner__title main-title">Продукты</h1>
        <p class="main-banner__txt">Широкий спектр современных препаратов на рынке фармацевтической индустрии позволяет Spey осуществлять свою деятельность во многих странах мира. Мы готовы делиться опытом и накопленными знаниями с медицинскими специалистами, чтобы решать и находить лучшие решения для возникающих проблем в здравоохранении.</p>
      </div>
    </section>

    <section class="products-page__categories">
      <div class="products-page__categories-inner main-container">
        <div class="products-page__categories-list">
          <a class="products-page__category" href="{{ route('products.index') }}">
            <img class="products-page__category-image" src="{{ asset('img/products-page/all-products.png') }}" alt="All products">
            <h2 class="products-page__category-title">Все продукты</h2>
          </a>

          <a class="products-page__category" href="{{ route('products.index') }}">
            <img class="products-page__category-image" src="{{ asset('img/products-page/nosology.jpg') }}" alt="All products">
            <h2 class="products-page__category-title">Нозология</h2>
          </a>

          <a class="products-page__category" href="{{ route('products.index') }}">
            <img class="products-page__category-image" src="{{ asset('img/products-page/atx.jpg') }}" alt="All products">
            <h2 class="products-page__category-title">АТХ классификация</h2>
          </a>
        </div>
      </div>
    </section>

    <section class="new-products">
      <div class="new-products__inner main-container">
        <h2 class="new-products__title main-title">Новые препараты</h2>

        <div class="carousel-container">
          <div class="products-carousel owl-carousel">
            @foreach ($newProducts as $product)
              <div class="owl-carousel__item">
                <x-product-card :product="$product" />
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

  </div>
</div>

@endsection
