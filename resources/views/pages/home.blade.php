@extends('layouts.app')

@section('main')
<section class="home-banner">
  <img class="home-banner__image" src="{{ asset('img/home/banner.png') }}" alt="spey banner">
  <div class="home-banner__body">
    <div class="home-banner__body-inner main-container">
      <div class="home-banner__text">
        <div class="home-banner__title"><h1>SPEY</h1></div>
        <p class="home-banner__desc"> – это международная компания, деятельность которой направлена на улучшение жизни людей путем предоставления инновационной и востребованной продукции в сфере здравоохранения.</p>
        <a href="{{ route('products.all') }}" class="home-banner__link button button--more">
          <i>Все препараты</i> <span class="material-icons">east</span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="about-cards-section home-about-cards-section">
  <div class="about-cards-section__inner main-container">
    <h2 class="about-cards-title main-title">О компании</h2>

    @include('components.about-cards-list')
  </div>
</section>

<section class="popular-products">
  <div class="popular-products__inner main-container">
    <h2 class="popular-products__title main-title">Популярные препараты</h2>

    <div class="carousel-container">
      <div class="products-carousel owl-carousel">
        @foreach ($popularProducts as $product)
          <div class="owl-carousel__item">
            <x-product-card :product="$product" />
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="latest-posts home-latest-posts">
  <div class="latest-posts__inner main-container">
    <h2 class="latest-posts__title main-title">Последние посты</h2>

    <x-posts-list :posts="$latestPosts"/>
  </div>
</section>

@endsection
