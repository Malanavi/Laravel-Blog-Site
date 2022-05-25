<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}" />
</head>
<body>
<div class="wrapper">
    <header class="header @yield('header_offer')">
        <div class="header__inner">
            <div class="header__panel-info">
                <a class="logo header__logo" href="#">
                    <img src="{{asset('images/logo/logo.svg')}}" alt="Мир Вольта" />
                </a>
                <ul class="header__contacts">
                    <li class="header__contact-item">
                        <a class="header__contact-link" href="mailto:Mirvolta@bk.ru">Mirvolta@bk.ru</a>
                    </li>
                    <li class="header__contact-item">
                        <a class="header__contact-link" href="tel:+79113885777">+7 911 388 57 77</a>
                    </li>
                    <li class="header__contact-item">
                        <a class="header__contact-link" href="tel:+79118972982">+7 911 897 29 82</a>
                    </li>
                </ul>
            </div>
            <div class="header__panel-menu">
                <div class="container">
                    <div class="menu">
                        <ul class="menu__list">
                            <li class="menu__list-item">
                                <a class="menu__list-link @yield('index_active')" href="/">Главная</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__list-link @yield('services_active')" href="/services">Услуги</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__list-link @yield('about_active')" href="/about">О компании</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__list-link @yield('contacts_active')" href="/contacts">Контакты</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__list-link @yield('blog_active')" href="/blog">Блог</a>
                            </li>
                        </ul>
                        <button class="menu__burger-button">
                            <img src="{{asset('images/menu_burger.svg')}}" alt="Новости" />
                        </button>
                        <div id="rightside-menu-trigger" class="rightside-menu rightside-menu--closed">
                            <div class="rightside-menu__news"><h6>Новости</h6></div>
                            <div class="rightside-menu__content">
                                <div class="rightside-menu__card">
                                    <h4 class="rightside-menu__title">
                                        Сложная задача была успешно выполнена
                                    </h4>
                                    <p class="rightside-menu__subtitle">
                                        Задача была очень трудной, но мы справились.
                                    </p>
                                    <a class="rightside-menu__learn-more-button" href="#">Подробнее</a>
                                </div>
                                <div class="rightside-menu__card">
                                    <h4 class="rightside-menu__title">
                                        Сложная задача была успешно выполнена
                                    </h4>
                                    <p class="rightside-menu__subtitle">
                                        Задача была очень трудной, но мы справились.
                                    </p>
                                    <a class="rightside-menu__learn-more-button" href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('offer')
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__info">
                        <a class="logo footer__logo" href="#">
                            <img src="{{asset('images/logo/logo.svg')}}" alt="Мир Вольта"/>
                        </a>
                        <p class="footer__info-text">
                            Наш коллектив является дочерней компанией ООО «Бюро Торговли и Строительства», которая занимается строительством объектов и сельскохозяйственных ферм.
                        </p>
                        <form class="footer__form" action="">
                            <input class="footer__form-input" type="email" placeholder="Получать рассылку">
                            <button class="footer__form-button" type="submit">Отправить</button>
                        </form>
                    </div>
                    <div class="footer__social">
                        <h6 class="footer__social-title">Мы в Соц. Сетях</h6>
                        <ul class="footer__social-items">
                            <li class="footer__social-item  footer__social-item--vk">
                                <a class="footer__social-link" href="https://vk.com/wvolt">ВКонтакте</a>
                            </li>
                            <li class="footer__social-item footer__social-item--tg">
                                <a class="footer__social-link" href="mailto:Mirvolta@bk.ru">Telegram</a>
                            </li>
                            <li class="footer__social-item footer__social-item--wa">
                                <a class="footer__social-link" href="tel:+79113885777">WhatsApp</a>
                            </li>
                            <li class="footer__social-item footer__social-item--vb">
                                <a class="footer__social-link" href="tel:+79118972982">Viber</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__map">
                        <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/25/pskov/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Псков</a><a href="https://yandex.ru/maps/25/pskov/?ll=28.301232%2C57.830072&utm_medium=mapframe&utm_source=maps&z=18.85" style="color:#eee;font-size:12px;position:absolute;top:14px;">Псков — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUFbTSgTA" height="200" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                        <p>г. Псков, улица Алмазная, д. 6/2</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <p>Copyright</p>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('js/main.min.js')}}"></script>
</body>
</html>
