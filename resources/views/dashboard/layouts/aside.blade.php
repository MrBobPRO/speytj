<aside class="aside">
  <nav class="aside__nav">
    <ul class="aside__menu">
      <li class="aside__menu-item">
        <p class="aside__menu-title">Основные</p>
      </li>

      <li class="aside__menu-item">
        <a class="aside__menu-link @if($modelTag == 'products')active @endif" href="{{ route('products.dashboard.index') }}">
          <span class="material-icons-outlined">medication</span> Продукты
        </a>
      </li>

      <li class="aside__menu-item">
        <a class="aside__menu-link @if($modelTag == 'nosology')active @endif" href="{{ route('nosology.dashboard.index') }}">
          <span class="material-icons-outlined">inventory</span> Нозология
        </a>
      </li>

      <li class="aside__menu-item">
        <a class="aside__menu-link @if($modelTag == 'atx')active @endif" href="{{ route('atx.dashboard.index') }}">
          <span class="material-icons-outlined">class</span> АТХ классификация
        </a>
      </li>

      <li class="aside__menu-item">
        <a class="aside__menu-link @if($modelTag == 'posts')active @endif" href="{{ route('posts.dashboard.index') }}">
          <span class="material-icons-outlined">notes</span> Посты
        </a>
      </li>

      <li class="aside__menu-item">
        <p class="aside__menu-title">Дополнительно</p>
      </li>

      <li class="aside__menu-item">
        <a class="aside__menu-link" href="{{ route('home') }}" target="_blank">
          <span class="material-icons-outlined">home</span> Перейти на сайт
        </a>
      </li>

      <li class="aside__menu-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="aside__menu-button"><span class="material-icons-outlined">exit_to_app</span> Выйти</button>
        </form>
      </li>
    </ul>
  </nav>
</aside>
