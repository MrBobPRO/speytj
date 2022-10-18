@extends('layouts.app')

@section('title', 'Наука и развитие')

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
  <section class="categories-section">
    <div class="categories-section__inner main-container">

      <h1 class="categories-section__title main-title">Категории</h1>

      <div class="categories__list">
        @foreach ($categories as $cat)
          <a class="secondary-card" href="{{ route('science.categories.show', $cat->slug) }}">
            <img class="secondary-card__image" src="{{ asset('img/categories/' . $cat->image) }}" alt="{{ $cat->title }}">
            <div class="secondary-card__txt">
              <h2 class="secondary-card__title">{{ $cat->title }}</h2>
              <p class="secondary-card__desc">{{ $cat->posts()->where('scientific', true)->count() }} постов</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  <section class="latest-posts latest-scientific-posts">
    <div class="latest-posts__inner main-container">
      <h2 class="latest-posts__title main-title">Новые посты</h2>

      <x-posts-list :posts="$latestPosts" />
    </div>
  </section>
</div>

@endsection
