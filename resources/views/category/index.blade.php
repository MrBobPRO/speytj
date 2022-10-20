@extends('layouts.app')

@section('title', $category->title)

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  @if($route == 'science.categories.show')
    <a href="{{ route('science.index') }}">Наука и развитие</a>
  @elseif($route == 'for-patients.categories.show')
    <a href="{{ route('for-patients.index') }}">Это интересно</a>
  @endif
</li>

<li>
  {{ $category->title }}
</li>
@endsection

@section('main')
<div class="category-page">
  <div class="category-page__inner">
    <section class="category-posts">
      <div class="category-posts__inner main-container">
        <h2 class="category-posts__title main-title">{{ $category->title }}</h2>

        <x-posts-list class="category-posts-list" :posts="$posts"/>
      </div>
    </section>
  </div>
</div>

@endsection
