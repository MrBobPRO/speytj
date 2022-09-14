@props(['posts'])

<div class="posts-list-container">
  <div {{ $attributes->merge(['class' => 'posts-list']) }}>
    @foreach ($posts as $post)
      <x-post-card :post="$post"/>
    @endforeach
</div>

</div>
