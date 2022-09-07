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
          <a class="popup-card" href="#">
            <img class="popup-card__image" src="{{ asset('img/products-page/all-products.png') }}" alt="All products">
            <div class="popup-card__overlay">
              <h2 class="popup-card__title">Все продукты</h2>
              <p class="popup-card__txt">
                Портфолио наших препаратов включает в себе 56 препарата
              </p>
            </div>
          </a>

          <a class="popup-card" href="#">
            <img class="popup-card__image" src="{{ asset('img/products-page/nosology.png') }}" alt="Nosology">
            <div class="popup-card__overlay">
              <h2 class="popup-card__title">Нозология</h2>
              <p class="popup-card__txt">
                Все наши препараты отсортированные по Нозологию
              </p>
            </div>
          </a>

          <a class="popup-card" href="#">
            <img class="popup-card__image" src="{{ asset('img/products-page/atx.png') }}" alt="ATX">
            <div class="popup-card__overlay">
              <h2 class="popup-card__title">АТХ классификация</h2>
              <p class="popup-card__txt">
                Все наши препараты отсортированные по АТХ классификации
              </p>
            </div>
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
