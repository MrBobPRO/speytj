<div class="tab-content-item @if(strpos($route, 'for-patients') !== false) tab-content-item--active @endif" data-content-id="for-patients">
  <div class="menu-tab-content__main">
    <a class="menu__tab-title-link" href="{{ route('for-patients.index') }}">
      <h3 class="menu__tab-title">Для пациентов</h3>
    </a>

    <p class="menu__tab-desc">
      Здесь будет короткий текст про статьи и видео. Здесь будет короткий текст про статьи и видео. Здесь будет короткий текст про статьи и видео.
    </p>

    <a class="menu__tab-link" href="{{ route('for-patients.index') }}">
      <span class="material-icons">chevron_right</span> Подробнее
    </a>
  </div>

  @include('menu.top-products')

  <ul class="menu-tab-content__sublinks-container">
    <li>
      <a class="menu-tab-content__sublink" href="{{ route('for-patients.posts') }}">Научно-популярные статьи</a>
    </li>

    <li>
      <a class="menu-tab-content__sublink" href="{{ route('for-patients.videos') }}">Видео</a>
    </li>
  </ul>
</div>
