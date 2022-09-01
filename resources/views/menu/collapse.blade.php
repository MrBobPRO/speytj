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
            <button class="tab-button @if($route == 'home') tab-button--active @endif" data-target-id="main">Главная</button>
            <button class="tab-button" data-target-id="about">О Нас</button>
            <button class="tab-button" data-target-id="products">Продукты</button>
            <button class="tab-button" data-target-id="science">Наука и развитие</button>
            <button class="tab-button" data-target-id="for-patients">Для пациентов</button>
            <button class="tab-button" data-target-id="contacts">Контакты</button>
          </div>
        </div>

        <div class="tab-content-container">
          <div class="tab-content-container__inner main-container">
            @include('menu.content-home')
            @include('menu.content-about')
            @include('menu.content-products')
            @include('menu.content-science')
            @include('menu.content-for-patients')
            @include('menu.content-contacts')
          </div>
        </div>
      </div>

      <div class="menu__search">
        <div class="menu__search-inner main-container"></div>
      </div>
    </div>
</div>
