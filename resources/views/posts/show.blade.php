@extends('layouts.app')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

@switch($previousRoute)
  @case('home')
    <li>
      Последние посты
    </li>
    @break

  @case('science.index')
  @case('science.categories.show')
    <li>
      <a href="{{ route('science.index') }}">Наука и развитие</a>
    </li>
    @break

  @case('for-patients.index')
  @case('for-patients.posts')
  @case('for-patients.categories.show')
    <li>
      <a href="{{ route('for-patients.index') }}">Для пациентов</a>
    </li>
    @break
@endswitch

<li>
  {{ $post->title }}
</li>
@endsection


@section('main')
<div class="post-page">
  <div class="post-page__inner main-container">
    <div class="post">
      <img class="post__banner" src="{{ asset('img/posts/' . $post->image) }}" alt="{{ $post->title }}">

      <div class="post__desc">
        <span class="post__date">{{ Carbon\Carbon::create($post->created_at)->locale('ru')->isoFormat('DD.MM.YYYY') }}</span>
        <h1 class="post__title main-title">{{ $post->title }}</h1>

        @if($post->pdf)
          <a class="post__pdf" href="/pdf/posts/{{ $post->pdf }}" target="_blank">Скачать PDF</a>
        @endif

        <div class="ya-share2" data-curtain data-services="vkontakte,telegram,twitter,viber,whatsapp"></div>
      </div>

      <div class="post__body">{!! $post->body !!}</div>
    </div>
  </div>
</div>
@endsection