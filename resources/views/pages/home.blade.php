@extends('layouts.app')

@section('main')
<section class="banner">
  <img class="banner__image" src="{{ asset('img/home/banner.png') }}" alt="spey banner">
  <div class="banner__body">
    <div class="banner__body-inner main-container">
      <div class="banner__text">
        <div class="banner__title"><span>SPEY</span></div>
        <p class="banner__desc"> — мы специализируемся на разработке, производстве и поставке высококачественных лекарственных препаратов. <br>Мы изучаем перспективные направления в медицине, чтобы предлагать больше возможностей своим потребителям.</p>
        <a href="#" class="banner__link button button--more">
          <i>Все препараты</i> <span class="material-icons">east</span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="about-cards-section home-about-cards-section">
  <div class="about-cards-section__inner main-container">
    <h1 class="about-cards-title main-title">О компании</h1>

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
            <x-product-card :product="$product"/>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

@endsection
