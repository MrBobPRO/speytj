@extends('layouts.app')

@section('title', 'Для пациентов')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  Для пациентов
</li>
@endsection


@section('main')
<div class="for-patients-page">
  <section class="for-patients-page__videos">
    <div class="for-patients-page__videos-inner main-container">
      <h1 class="for-patients-page__videos-title main-title">Новые видео</h1>
      <x-videos-list :videos="$latestVideos" pagination="0" />

      <a class="button button--more for-patients-page__videos-more" href="{{ route('for-patients.videos') }}">
        <i>Посмотреть все видео</i>
        <span class="material-icons">east</span>
      </a>
    </div>
  </section>

  <section class="for-patients-page__posts">
    <div class="for-patients-page__posts-inner main-container">
      <h1 class="for-patients-page__posts-title main-title">Новые посты</h1>
      <x-posts-list :posts="$latestPosts" />

      <a class="button button--more for-patients-page__posts-more" href="{{ route('for-patients.posts') }}">
        <i>Посмотреть все посты</i>
        <span class="material-icons">east</span>
      </a>
    </div>
  </section>
</div>
@endsection
