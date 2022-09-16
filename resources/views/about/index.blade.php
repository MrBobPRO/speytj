@extends('layouts.app')

@section('title', 'О Нас')

@section('breadcrumbs')
  <li>
    <a href="{{ route('home') }}">Главная</a>
  </li>

  <li>
    О Нас
  </li>
@endsection

@section('main')
<div class="about-index-page">
  <div class="about-index-page__inner main-container">
    <h1 class="about-index-page__title main-title">О компании</h1>

    @include('components.about-cards-list')
  </div>
</div>

@endsection
