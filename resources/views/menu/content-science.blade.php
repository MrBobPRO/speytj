<div class="tab-content-item @if(strpos($route, 'science') !== false) tab-content-item--active @endif" data-content-id="science">
  <div class="menu-tab-content__main">
    <a class="menu__tab-title-link" href="{{ route('science.index') }}">
      <h3 class="menu__tab-title">Наука и развитие</h3>
    </a>

    <p class="menu__tab-desc">
      Здесь будет короткий текст про науку и развитию. Здесь будет короткий текст про науку и развитию. Здесь будет короткий текст про науку и развитию.
    </p>

    <a class="menu__tab-link" href="{{ route('science.index') }}">
      <span class="material-icons">chevron_right</span> Подробнее
    </a>
  </div>

  @include('menu.top-products')
</div>
