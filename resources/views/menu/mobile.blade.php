{{-- Mobile Menu --}}
<div class="mobile-menu">
  <div class="mobile-menu__overlay" data-action="toggle-mobile-menu"></div>

  <nav class="mobile-menu__nav">
    <button class="mobile-menu__close-btn button--transparent" data-action="toggle-mobile-menu">
      <span class="material-icons">close</span>
    </button>

    <div class="mobile-menu__logo-container">
      <a class="logo mobile-menu__logo" href="{{ route('home') }}">
        <img class="logo__image" src="{{ asset('img/main/logo.png') }}" alt="Spey logo">
      </a>
    </div>

    <ul class="mobile-menu__ul">
      <li class="mobile-menu__li">
        <a class="mobile-menu__link" href="{{ route('home') }}">Главная</a>
      </li>

      <li class="mobile-menu__li">
        <a class="mobile-menu__link" href="{{ route('about.index') }}">О Нас</a>

        <ul class="mobile-submenu">
          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('about.history') }}">История становления</a>
          </li>

          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('about.wealth') }}">Наши ценности</a>
          </li>

          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('about.career') }}">Карьера</a>
          </li>
        </ul>
      </li>

      <li class="mobile-menu__li">
        <a class="mobile-menu__link" href="{{ route('products.index') }}">Продукты</a>

        <ul class="mobile-submenu">
          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('products.all') }}">Все продукты</a>
          </li>

          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('nosology.show', $defaultNosology) }}">Нозология</a>
          </li>

          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('atx.show', $defaultAtx) }}">ATX классификация</a>
          </li>
        </ul>
      </li>

      <li class="mobile-menu__li">
        <a class="mobile-menu__link" href="{{ route('science.index') }}">Наука и развитие</a>
      </li>

      <li class="mobile-menu__li">
        <a class="mobile-menu__link" href="{{ route('for-patients.index') }}">Для пациентов</a>

        <ul class="mobile-submenu">
          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('for-patients.posts') }}">Посты</a>
          </li>

          <li class="mobile-submenu__li">
            <a class="mobile-submenu__link" href="{{ route('for-patients.videos') }}">Видео</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div> {{-- Mobile Menu end--}}
