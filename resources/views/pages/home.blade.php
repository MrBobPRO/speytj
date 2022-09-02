@extends('layouts.app')

@section('main')
<section class="banner">
  <img class="banner__image" src="{{ asset('img/home/banner.png') }}" alt="spey banner">
  <div class="banner__body">
    <div class="banner__body-inner main-container">
      <div class="banner__text">
        <div class="banner__title"><h1>SPEY</h1></div>
        <p class="banner__desc"> – это международная компания, деятельность которой направлена на улучшение жизни людей путем предоставления инновационной и востребованной продукции в сфере здравоохранения.</p>
        <a href="#" class="banner__link button button--more">
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

<section class="contacts-section">
  <div class="contacts-section__inner main-container">
    <h2 class="contacts-section__title main-title">Свяжитесь с нами</h2>

    <div class="contacts-section__divider">
      <form class="feedback-form" action="#" method="POST">
        @csrf

        <div class="form-group">
          <input class="input feedback-form__input" type="text" name="name" placeholder="Имя*">
          <input class="input feedback-form__input" type="text" name="email" placeholder="Почта*">
        </div>

        <div class="form-group">
          <input class="input feedback-form__input" type="text" name="theme" placeholder="Тема">
        </div>

        <div class="form-group">
          <textarea class="textarea feedback-form__textarea" name="body" rows="8" placeholder="Текст*"></textarea>
        </div>

        <button class="button button--main feedback-form__button">Отправить</button>
      </form>

      <div class="map"></div>
    </div>
  </div>
</section>

@endsection
