@extends('layouts.app')

@section('breadcrumbs')
  <li>
    <a href="{{ route('home') }}">Главная</a>
  </li>

  <li>
    <a href="{{ route('about.index') }}">О Нас</a>
  </li>

  <li>
    Карьера
  </li>
@endsection

@section('main')
<div class="career-page">
  <div class="career-page__inner">
    <img src="{{ asset('img/about/career-banner.jpg') }}" alt="Spey career" class="career-page__banner">

    <div class="career-page__text main-container">
      <h1 class="career-page__title main-title">Присоединяйтесь к нам!</h1>

      <p>Сотрудничество с представителями мировых компаний, использование современных информационных технологий, помогает нам расти и добиваться
        желаемых результатов. Изменения внутри компании, способствуют тому, что мы развиваемся не только по отдельности, как индивидуумы,
        но и как вся компания целиком, как один слаженный механизм. Обмениваемся опытом с коллегами, решаем сложные задачи и познаём новые технологии.</p>

      <p class="mb-0"><strong>В будущих сотрудниках мы ценим:</strong></p>
      <ul>
        <li>Профессионализм и инициативность</li>
        <li>Ответственность и энергичность</li>
        <li>Динамичность и готовность к изменениям</li>
        <li>Наличие желания расти и развиваться вместе с компанией</li>
      </ul>

      <p class="mb-0"><strong>Spey предлагает:</strong></p>
      <ul>
        <li>Карьерный и профессиональный рост</li>
        <li>Работа в команде профессионалов высочайшего уровня</li>
        <li>Возможность ротации для приобретения современных навыков и разнообразного опыта в крупной компании</li>
        <li>Вознаграждение, достойное профессионалов</li>
        <li>Дополнительные развивающие программы, в зависимости от позиции</li>
      </ul>
    </div>
  </div>
</div>

@endsection
