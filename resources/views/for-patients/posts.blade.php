@extends('layouts.app')

@section('title', 'Посты')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  <a href="{{ route('for-patients.index') }}">Для пациентов</a>
</li>

<li>
  Посты
</li>
@endsection

@section('main')
<div class="for-patients-posts-page">
    <section class="for-patients-categories">
      <div class="for-patients-categories__inner main-container">

        <h1 class="for-patients-categories__title main-title">Категории</h1>

        <div class="for-patients-categories__list">
          @foreach ($categories as $cat)
          <a class="popup-card" href="{{ route('for-patients.categories.show', $cat->slug) }}">
            <img class="popup-card__image" src="{{ asset('img/categories/' . $cat->image) }}" alt="{{ $cat->title }}">
            <div class="popup-card__overlay">
              <h2 class="popup-card__title">{{ $cat->title }}</h2>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </section>

    <section class="latest-posts latest-for-patients-posts">
      <div class="latest-posts__inner main-container">
        <h2 class="latest-posts__title main-title">Новые посты</h2>

        <x-posts-list :posts="$latestPosts"/>
      </div>
    </section>
</div>

@endsection
