@extends('layouts.app')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  Наука и развитие
</li>
@endsection

@section('main')
<div class="science-page">
  <div class="science-page__inner">
    <section class="science-page__banner main-banner">
      <img class="main-banner__image" src="{{ asset('img/science/banner.png') }}" alt="Spey products">
      <div class="main-banner__txt-container">
        <h1 class="main-banner__title main-title">Наука и развитие</h1>
        <p class="main-banner__txt">Здесь будет короткий текст про науку и развитию. Здесь будет короткий текст про науку и развитию. Здесь будет короткий текст про науку и развитию. Здесь будет короткий текст про науку и развитию.</p>
      </div>
    </section>

    <section class="science-categories">
      <div class="science-categories__inner main-container">

        <div class="science-categories__list">
          @foreach ($categories as $cat)
          <a class="popup-card" href="#">
            <img class="popup-card__image" src="{{ asset('img/categories/' . $cat->image) }}" alt="{{ $cat->title }}">
            <div class="popup-card__overlay">
              <h2 class="popup-card__title">{{ $cat->title }}</h2>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </section>

    <section class="latest-posts latest-science-posts">
      <div class="latest-posts__inner main-container">
        <h2 class="latest-posts__title main-title">Последние посты</h2>

        
      </div>
    </section>

  </div>
</div>

@endsection
