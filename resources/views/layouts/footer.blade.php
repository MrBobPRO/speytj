<footer class="footer">
  <div class="footer__inner main-container">
    {{-- Logo Start --}}
    <a class="logo footer__logo" href="{{ route('home') }}">
      <img class="logo__image" src="{{ asset('img/main/logo-light.png') }}" alt="Spey white logo">
    </a>  {{-- Logo end --}}

    {{-- About links start --}}
    <div class="footer__block">
      <h5 class="footer__title"><a href="#">О Нас</a></h5>

      <ul class="footer__list">
        <li>
          <a href="#" class="footer__link">История становления</a>
        </li>

        <li>
          <a href="#" class="footer__link">Наши ценности</a>
        </li>

        <li>
          <a href="#" class="footer__link">Развитие</a>
        </li>

        <li>
          <a href="#" class="footer__link">Карьера</a>
        </li>
      </ul>
    </div>  {{-- About links end --}}

    {{-- Products links start --}}
    <div class="footer__block">
      <h5 class="footer__title"><a href="#">Продукты</a></h5>

      <ul class="footer__list">
        <li>
          <a href="#" class="footer__link">Все продукты</a>
        </li>

        <li>
          <a href="#" class="footer__link">Нозология</a>
        </li>

        <li>
          <a href="#" class="footer__link">ATX классификация</a>
        </li>
      </ul>
    </div>  {{-- Products links start --}}

    {{-- Contacts start --}}
    <div class="footer__block">
      <h5 class="footer__title"><a href="#">Контакты</a></h5>

      <ul class="footer__list">
        <li>
          <a href="#" class="footer__link">Телефон: +992 987654321</a>
        </li>

        <li>
          <a href="#" class="footer__link">Эл. почта: info@spey.tj</a>
        </li>
      </ul>

      <ul class="footer__socials-list">
        <li>
          <a href="#" class="footer__socials-link"><svg><use href="#facebook-svg"></use></svg></a>
        </li>

        <li>
          <a href="#" class="footer__socials-link"><svg><use href="#instagram-svg"></use></svg></a>
        </li>
      </ul>

    </div>  {{-- Contacts end --}}
  </div>

  <div class="footer__copyright">Spey Healthcare © {{ date('Y') }}. Все права защищены</div>
</footer>

