<div class="menu">
  <div class="menu__header">
    <div class="menu__header-inner main-container">
      <button class="menu__close-button button button--transparent">
        <span class="material-icons">close</span> Закрыть
      </button>

      <form class="menu__search-form" action="#" method="POST">
        <input class="menu__search-input" type="text" placeholder="Поиск..." required>
        <button class="menu__search-submit"><span class="material-icons">search</span></button>
      </form>

      <a class="logo menu__logo" href="{{ route('home') }}">
        <img class="logo__image" src="{{ asset('img/main/logo-light.png') }}" alt="Spey logo">
      </a>
    </div>
  </div>

  <div class="menu__body">
    <div class="menu__tab">
      <div class="tab-buttons-container">
        <div class="tab-buttons-container__inner main-container">
          <button class="tab-button @if($route == 'home' || $route == ('posts.show')) tab-button--active @endif" data-target-id="main" data-link="{{ route('home') }}">Главная</button>
          <button class="tab-button @if(strpos($route, 'about') !== false) tab-button--active @endif" data-target-id="about" data-link="{{ route('about.index') }}">О Нас</button>
          <button class="tab-button @if(strpos($route, 'products') !== false) tab-button--active @endif" data-target-id="products"
            data-link="{{ route('products.index') }}">Продукты</button>
          <button class="tab-button @if(strpos($route, 'science') !== false) tab-button--active @endif" data-target-id="science" data-link="{{ route('science.index') }}">Наука и
            развитие</button>
          <button class="tab-button @if(strpos($route, 'for-patients') !== false) tab-button--active @endif" data-target-id="for-patients" data-link="{{ route('for-patients.index') }}">Для
            пациентов</button>
        </div>
      </div>

      <div class="tab-content-container">
        <div class="tab-content-container__inner main-container">
          @include('menu.content-home')
          @include('menu.content-about')
          @include('menu.content-products')
          @include('menu.content-science')
          @include('menu.content-for-patients')
        </div>
      </div>
    </div>

    <div class="menu__search">
      <div class="menu__search-inner main-container"></div>
    </div>
  </div>
</div>
