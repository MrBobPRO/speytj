@extends('layouts.app')

@section('title', 'Видео')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  <a href="{{ route('interesting.index') }}">Это интересно</a>
</li>

<li>
  Видео
</li>
@endsection


@section('main')
<div class="videos-page">
  <div class="videos-page__inner main-container">
    <h1 class="vides-page__title main-title">Видео</h1>

    <x-videos-list :videos="$videos" />
  </div>
</div>
@endsection
