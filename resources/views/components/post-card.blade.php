@props(['post'])

<a class="post-card" href="#">
  <div class="post-card__img-container">
    <img class="post-card__image" src="{{ asset('img/posts/' . $post->image) }}" alt="{{ $post->title }}">
  </div>

  <div class="post-card__body">
    <span class="post-card__date">{{ Carbon\Carbon::create($post->created_at)->locale('ru')->isoFormat('DD.MM.YYYY') }}</span>
    <h3 class="post-card__title">{{ $post->title }}</h3>
  </div>
</a>
