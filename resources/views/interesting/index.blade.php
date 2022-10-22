@extends('layouts.app')

@section('title', 'Это интересно')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  Это интересно
</li>
@endsection


@section('main')
<div class="interesting-page">
  <section class="interesting-about">
    <div class="interesting-about__inner main-container">
      <div class="interesting-about__txt">
        <h1 class="interesting-about__title main-title">Это интересно</h1>
        <p class="interesting-about__desc">В этом разделе предоставлены интересные видео и научно-популярные статьи для наших любимых пользователей. В этом разделе предоставлены интересные видео и научно-популярные статьи для наших любимых пользователей статьи для наших любимых пользователей</p>
      </div>

      <div class="interesting-about__img-container">
        <img class="interesting-about__img" src="{{ asset('img/interesting/vr.jpg') }}" alt="vr">
        <img class="interesting-about__img" src="{{ asset('img/interesting/dna.jpg') }}" alt="dna">
        <img class="interesting-about__img" src="{{ asset('img/interesting/planet.jpg') }}" alt="planet">
        <img class="interesting-about__img" src="{{ asset('img/interesting/ocean.jpg') }}" alt="ocean">
      </div>
    </div>
  </section>

  <section class="interesting-page__videos">
    <div class="interesting-page__videos-inner main-container">
      <h2 class="interesting-page__videos-title main-title">Новые видео</h2>
      <x-videos-list :videos="$latestVideos" pagination="0" />

      <a class="button button--more interesting-page__videos-more" href="{{ route('interesting.videos') }}">
        <i>Посмотреть все видео</i>
        <span class="material-icons">east</span>
      </a>
    </div>
  </section>

  <section class="interesting-page__posts">
    <div class="interesting-page__posts-inner main-container">
      <h2 class="interesting-page__posts-title main-title">Новые статьи</h2>
      <x-posts-list :posts="$latestPosts" />

      <a class="button button--more interesting-page__posts-more" href="{{ route('interesting.posts') }}">
        <i>Посмотреть все посты</i>
        <span class="material-icons">east</span>
      </a>
    </div>
  </section>
</div>
@endsection
