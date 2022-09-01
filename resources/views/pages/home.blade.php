@extends('layouts.app')

@section('main')
<section class="banner">
  <img class="banner__image" src="{{ asset('img/home/banner.png') }}" alt="spey banner">
  <div class="banner__body">
    <div class="banner__body-inner main-container">
      <div class="banner__text">
        <div class="banner__title"><span>SPEY</span></div>
        <p class="banner__desc"> — мы специализируемся на разработке, производстве и поставке высококачественных лекарственных препаратов</p>
        <a href="#" class="banner__link button button--more">
          <i>Все препараты</i> <span class="material-icons">east</span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="about-cards-section">
  <div class="about-cards-section__inner main-container">
    <h1 class="about-cards-title main-title">О компании</h1>

    <div class="about-cards-list">
      <div class="about-card">
        <img class="about-card__image" src="{{ asset('img/about/history.png') }}" alt="history">
        <div class="about-card__text-container">
          <h4 class="about-card__title">История становления</h4>
          <p class="about-card__text">
            Spey – это международная компания, деятельность которой направлена на улучшение жизни людей путем предоставления инновационной и востребованной продукции в сфере здравоохранения.
          </p>
          <a href="#" class="about-card__link button button--more">
            <i>Подробнее</i> <span class="material-icons">east</span>
          </a>
        </div>
      </div>

      <div class="about-card">
        <img class="about-card__image" src="{{ asset('img/about/wealth.png') }}" alt="wealth">
        <div class="about-card__text-container">
          <h4 class="about-card__title">Наши ценности</h4>
          <p class="about-card__text">
            Наши ценности выражают то, во что мы верим, как представители компании, и отражают наши лучшие качества. Spey всегда руководствуется ими в работе.
          </p>
          <a href="#" class="about-card__link button button--more">
            <i>Подробнее</i> <span class="material-icons">east</span>
          </a>
        </div>
      </div>

      <div class="about-card">
        <img class="about-card__image" src="{{ asset('img/about/development.png') }}" alt="development">
        <div class="about-card__text-container">
          <h4 class="about-card__title">Развитие</h4>
          <p class="about-card__text">
            Представительства компании открыты в шести странах Азии. Благодаря чему появилась возможность предложить более широкий спектр высокоэффективных и доступных продуктов потребителям и нашим партнерам.
          </p>
          <a href="#" class="about-card__link button button--more">
            <i>Подробнее</i> <span class="material-icons">east</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="popular-products">
  <div class="popular-products__inner main-container">
    <h2 class="popular-products__title main-title">Популярные препараты</h2>
  </div>
</section>

@endsection
