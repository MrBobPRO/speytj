@extends('layouts.app', ['pageClass' => 'history-page'])

@section('title', 'История становления')

@section('breadcrumbs')
  <li>
    <a href="{{ route('home') }}">Главная</a>
  </li>

  <li>
    <a href="{{ route('about.index') }}">О Нас</a>
  </li>

  <li>
    История становления
  </li>
@endsection

@section('main')
<section class="main-banner history-page__banner">
  <picture>
    <source media="(max-width:991px)" srcset="{{ asset('img/about/history-banner-small.jpg') }}">
    <img class="main-banner__image" src="{{ asset('img/about/history-banner.jpg') }}" alt="Spey history">
  </picture>

  <div class="main-banner__txt-container">
    <h1 class="main-banner__title main-title">История становления</h1>
    <p class="main-banner__txt">Компания <strong>Spey</strong> - это стабильная, современная, социально-ответственная компания, несущая обществу инновационные методы лечения и
      профилактики болезней. Деятельность нашей компании направлена на поддержание и сохранение здоровья, а также улучшение качества жизни людей.</p>
  </div>
</section>

<section class="history-page__divider">
  <div class="history-page__divider-inner main-container">
    <img src="{{ asset('img/about/history-banner2.jpg') }}" alt="Spey history" class="history-page__divider-image">
    <div class="history-page__divider-txt">
      В настоящее время <strong>Spey</strong> занимается прямым продвижением фармацевтической продукции под собственными
      зарегистрированными торговыми марками в странах Европы, Средней и Юго-Восточной Азии.
    </div>
  </div>
</section>

<section class="history-page__txt">
  <div class="history-page__txt-inner main-container">
    <p>Наша компания специализируется на разработке, производстве и поставке высококачественных лекарственных препаратов. Мы изучаем перспективные направления в медицине, чтобы
      предлагать больше возможностей своим потребителям.</p>

    <p>В 2011 году с открытием местных компаний на Филиппинах, во Вьетнаме, Камбодже и Мьянме компания расширила свою деятельность в странах Юго-Восточной Азии, а в 2014 году Spey
      также укрепила свою деятельность в Европе, открыв региональный офис в Скопье, Македонии.</p>

    <p>Также компания за достаточно короткое время существенно расширила своё присутствие в таких странах, как Россия, Греция, Индия, Вьетнам, Казахстан, Афганистан, Узбекистан,
      Таджикистан и Кыргызстан.</p>

    <p>Компанию <strong>Spey</strong> представляют профессионалы своего дела, обладающие необходимыми знаниями и опытом. Для производства и внедрения продуктов специалисты и
      менеджеры компании опираются на современные требования к лекарственным средствам. Мы ценим свои кадры и нашими всеобщими усилиями храним свою историю и ценности, а также
      стремимся оказать помощь в развитии здравоохранения и фармацевтики в будущем.</p>

    <p>Развитая сеть маркетинга и продаж позволяет компании ежегодно увеличивать объёмы продаж и расширять свою географию присутствия. Существенный финансовый скачок компании
      обусловлен ростом доверия наших постоянных партнёров и ростом ассортимента фармацевтической продукции. Наш бизнес сфокусирован на перевоплощении идей в инновационные, то есть
      в эффективные лекарства, которые востребованы в современном мире здравоохранения.</p>

    <p><strong>Открытость и адаптация к изменениям</strong> — это важнейшие условия успеха бизнеса. Поэтому мы постоянно развиваемся, совершенствуем применяемые бизнес-процессы,
      внедряя как собственные наработки, так и всемирно признанные.</p>
  </div>
</section>
@endsection
