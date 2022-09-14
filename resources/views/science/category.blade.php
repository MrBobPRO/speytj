@extends('layouts.app')

@section('breadcrumbs')
<li>
  <a href="{{ route('home') }}">Главная</a>
</li>

<li>
  <a href="{{ route('science.index') }}">Наука и развитие</a>
</li>

<li>
  {{ $category->title }}
</li>
@endsection

@section('main')
<div class="category-posts-page science-category-page">
  <div class="category-posts-page__inner">
    <section class="category-posts-section">
      <div class="category-posts-section__inner main-container">
        <h2 class="category-posts__title main-title">{{ $category->title }}</h2>

        <x-posts-list :posts="$category->posts"/>
      </div>
    </section>
  </div>
</div>

@endsection
