<div class="tab-content-item @if(strpos($route, 'products') !== false) tab-content-item--active @endif" data-content-id="contacts">
  <div class="menu-tab-content__main">
    <a class="menu__tab-title-link" href="{{ route('home') }}">
      <h3 class="menu__tab-title">Контакты</h3>
    </a>

    <p class="menu__tab-desc">
      Компания Spey за достаточно короткое время существенно расширила свое присутствие в таких странах, как Россия, Греция, Индия, Вьетнам, Казахстан, Афганистан, Таджикистан.
    </p>

    <a class="menu__tab-link" href="{{ route('home') }}">
      <span class="material-icons">chevron_right</span> Подробнее
    </a>
  </div>

  @include('menu.top-products')
</div>
