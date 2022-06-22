@extends('layouts.app')

@section('title', 'О компании')
@section('about_active', 'menu__list-link--active')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">О компании</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="about">
        <div class="about__preview preview">
            <div class="container">
                <div class="about__preview-title preview__title">
                    <h2 class="about__preview-title-text preview__title-text">О компании</h2>
                </div>
            </div>
        </div>
        <div class="post__content">
            <div class="container">
                <div class="post__content-inner">
                    <div class="post__list">
                        <h5 class="post__list-title">О нас</h5>
                        <ul class="post__list-items">
                            <li class="post__list-item"><a href="#" class="post__list-link">Кто мы такие?</a></li>
                            <li class="post__list-item"><a href="#" class="post__list-link">Что мы делаем?</a></li>
                            <li class="post__list-item"><a href="#" class="post__list-link">Как мы работаем?</a></li>
                            <li class="post__list-item"><a href="#" class="post__list-link">Наши проекты и блог.</a></li>
                        </ul>
                    </div>
                    <div class="post__content-box">
                        <div class="post__content-title">
                            <h3 class="post__content-title-text">Кто мы такие?</h3>
                        </div>
                        <div class="post__content-image">
                            <img src="{{asset('images/blog/about-img1.jpg')}}" alt="">
                        </div>
                        <div class="post__content-text">
                            <p class="post__content-text-item">Приветствую Вас от лица развивающейся компании ООО «Мир Вольта». Мы работаем уже не первый год, создали и создаём не мало систем электрификации и связи. Основным направлением компании является электрощитовое оборудование различного назначения. Принцип работы может быть любой, напряжением до 0,4 кВ.</p><br>
                            <p class="post__content-text-item">Все мы прекрасно понимаем, что в данный период времени невозможно стандартизировать системы полностью, поэтому готовы рассматривать любое техническое задание.</p><br>
                            <p class="post__content-text-item">Финансовая политика достаточно лояльна, любой ценник можно обсуждать, заменять составные части на разные фирмы более дешевого производителя.</p><br>
                            <p class="post__content-text-item">Каждая составная часть нашей продукции сертифицируется отдельно, а продукция проверяется вся индивидуально.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
