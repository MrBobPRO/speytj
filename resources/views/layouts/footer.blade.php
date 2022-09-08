<footer class="footer">
  <div class="footer__inner main-container">

    {{-- About links start --}}
    <div class="footer__block">
      <h5 class="footer__title"><a href="{{ route('about.index') }}">О Нас</a></h5>

      <ul class="footer__list">
        <li>
          <a href="{{ route('about.history') }}" class="footer__link">История становления</a>
        </li>

        <li>
          <a href="{{ route('about.wealth') }}" class="footer__link">Наши ценности</a>
        </li>

        <li>
          <a href="{{ route('about.career') }}" class="footer__link">Карьера</a>
        </li>
      </ul>
    </div>  {{-- About links end --}}

    {{-- Products links start --}}
    <div class="footer__block">
      <h5 class="footer__title"><a href="{{ route('products.index') }}">Продукты</a></h5>

      <ul class="footer__list">
        <li>
          <a href="{{ route('products.all') }}" class="footer__link">Все продукты</a>
        </li>

        <li>
          <a href="{{ route('products.nosology', $defaultNosology) }}" class="footer__link">Нозология</a>
        </li>

        <li>
          <a href="{{ route('products.atx', $defaultAtx) }}" class="footer__link">ATX классификация</a>
        </li>
      </ul>
    </div>  {{-- Products links start --}}

    {{-- For patients links start --}}
    <div class="footer__block">
      <h5 class="footer__title"><a href="{{ route('about.index') }}">Для пациентов</a></h5>

      <ul class="footer__list">
        <li>
          <a href="{{ route('about.history') }}" class="footer__link">Статьи</a>
        </li>

        <li>
          <a href="{{ route('about.wealth') }}" class="footer__link">Видео</a>
        </li>
      </ul>
    </div>  {{-- For patients links end --}}

    {{-- Contacts start --}}
    <div class="footer__block">
      <h5 class="footer__title">Контакты</h5>

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

