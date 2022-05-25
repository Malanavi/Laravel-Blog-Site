@extends('layouts.app')

@section('title', 'Контакты - Мир Вольта')
@section('contacts_active', 'menu__list-link--active')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="contacts">
        <div class="contacts__preview preview">
            <div class="container">
                <div class="contacts__preview-title preview__title">
                    <h2 class="contacts__preview-title-text preview__title-text">Наши контакты</h2>
                </div>
            </div>
        </div>
        <div class="contacts__content">
            <h3 class="contacts__call">Ждем Ваших заявок!</h3>
            <div class="contacts__map-block">
                <a class="dg-widget-link" href="http://2gis.ru/pskov/firm/70000001060355829/center/28.300802707672123,57.830347368884865/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Пскова</a><div class="dg-widget-link"><a href="http://2gis.ru/pskov/firm/70000001060355829/photos/70000001060355829/center/28.300802707672123,57.830347368884865/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/pskov/center/28.300796,57.830136/zoom/16/routeTab/rsType/bus/to/28.300796,57.830136╎Мир Вольта, компания по производству щитового оборудования?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Мир Вольта, компания по производству щитового оборудования</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":1920,"height":500,"borderColor":"#a3a3a3","pos":{"lat":57.830347368884865,"lon":28.300802707672123,"zoom":16},"opt":{"city":"pskov"},"org":[{"id":"70000001060355829"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </div>
            <div class="container">
                <div class="contacts__content-inner">
                    <div class="contacts__items">
                        <div class="contacts__item">
                            <div class="contacts__icon-bg">
                                <img class="contacts__icon" src="{{asset('images/phone.png')}}" alt="Качество">
                            </div>
                            <h4 class="contacts__item-title">Позвоните нам</h4>
                            <div class="contacts__text-box">
                                <p class="contacts__item-text"><a class="contacts__item-link" href="tel:+79113885777">+7 (911) 388-57-77</a></p>
                            </div>
                        </div>
                        <div class="contacts__item">
                            <div class="contacts__icon-bg">
                                <img class="contacts__icon" src="{{asset('images/mail.png')}}" alt="Быстро">
                            </div>
                            <h4 class="contacts__item-title">Напишите на почту</h4>
                            <div class="contacts__text-box">
                                <p class="contacts__item-text"><a class="contacts__item-link" href="mailto:Mirvolta@bk.ru">Mirvolta@bk.ru</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
