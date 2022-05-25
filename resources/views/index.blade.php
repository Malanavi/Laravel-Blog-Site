@extends('layouts.app')

@section('title', 'Мир Вольта')
@section('header_offer', 'header-offer')
@section('index_active', 'menu__list-link--active')

@section('offer')
    <div class="offer">
        <div class="container">
            <div class="offer__inner">
                <h2 class="offer__title">Производство</h2>
                <h2 class="offer__title">Строительство</h2>
                <h2 class="offer__title">Электромонтаж</h2>
                <div class="offer__subtitle">
                    <p class="offer__subtitle-text">Мы быстро и качественно решаем любую вашу проблему</p>
                </div>
                <a class="offer__link" href="#">Подробнее о наших преимуществах</a>
                <button class="offer__button button">Оставить заявку</button>
            </div>
        </div>
    </div>
    <div class="offer-arrow">
        <span class="offer-arrow__text">Узнать подробнее...</span>
        <img class="offer-arrow__img" src="{{asset('images/arrow.svg')}}" alt="Узнать подробнее">
    </div>
@endsection

@section('content')
    <div class="slider">
        <div class="slider__item slider__item--1">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">ПРОВОДКА</h3>
                    <h4 class="slider__subtitle">КВАРТИРЫ, ДОМА, ПОМЕЩЕНИЯ</h4>
                    <p class="slider__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--2">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">СБОР и ПЕРЕБОР</h3>
                    <h4 class="slider__subtitle">ЭЛЕКТРИЧЕСКИХ ЩИТОВ любых видов</h4>
                    <p class="slider__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--3">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">УСТАНОВКА</h3>
                    <h4 class="slider__subtitle">РОЗЕТОК, ВЫКЛЮЧАТЕЛЕЙ, СВЕТИЛЬНИКОВ, ЛЮСТР</h4>
                    <p class="slider__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--4">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">ОДНОВРЕМЕННАЯ ЗАКЛАДКА КАБЕЛЕЙ</h3>
                    <h4 class="slider__subtitle">ПОД ИНТЕРНЕТ, ТЕЛЕВИДЕНИЕ И ВИДЕОНАБЛЮДЕНИЕ</h4>
                    <p class="slider__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--5">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">и это еще</h3>
                    <h4 class="slider__subtitle">далеко не все</h4>
                    <p class="slider__text">Полный список наших услуг можно узнать <a href="#">здесь</a>. Если решения
                        вашей проблемы нет в списке, не стоит отчаиваться! Наши специалисты смогут решить любую задачу!
                        И даже больше.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="advantages">
        <h3 class="advantages__title">Почему выбирают нас?</h3>
        <div class="container">
            <div class="advantages__items">
                <div class="advantages__item">
                    <div class="advantages__icon-bg">
                        <img class="advantages__icon" src="{{asset('images/award.svg')}}" alt="Качество">
                    </div>
                    <h4 class="advantages__item-title">Качество</h4>
                    <p class="advantages__item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo</p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__icon-bg">
                        <img class="advantages__icon" src="{{asset('images/speed.svg')}}" alt="Быстро">
                    </div>
                    <h4 class="advantages__item-title">Быстро</h4>
                    <p class="advantages__item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo</p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__icon-bg">
                        <img class="advantages__icon" src="{{asset('images/price.svg')}}" alt="Низкая цена">
                    </div>
                    <h4 class="advantages__item-title">По справедливой цене</h4>
                    <p class="advantages__item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo</p>
                </div>
            </div>
            <div class="action">
                <div class="action__item">
                    <button class="button action__send-button">Оставить заявку</button>
                </div>
                <div class="action__item">
                    <p>или</p>
                </div>
                <div class="action__item">
                    <button class="button action__more-button">Подробнее о компании</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="partners">
      <div class="container">
        <div class="partners__inner">
          <h3 class="partners__title">Наши партнеры</h3>
          <div class="partners__items">
            <div class="partners__item"></div>
            <div class="partners__item"></div>
            <div class="partners__item"></div>
          </div>
        </div>
      </div>
    </div> -->
    <section class="blog-box">
        <div class="container">
            <h3 class="blog-box__title">Наши проекты и блог</h3>
            <div class="blog-box__items">
                <div class="blog-box__item">
                    <a class="blog-box__img-link" href="#">
                        <img class="blog-box__img" src="{{asset('images/blog/1.png')}}" alt="">
                    </a>
                    <span class="blog-box__item-date">17 мая, 2022 12:11</span>
                    <a class="blog-box__title-link" href="">
                        <h4 class="blog-box__item-title">Закончили объект</h4>
                    </a>
                </div>
                <div class="blog-box__item">
                    <a class="blog-box__img-link" href="#">
                        <img class="blog-box__img" src="{{asset('images/blog/2.jpg')}}" alt="">
                    </a>
                    <span class="blog-box__item-date">16 мая, 2022 18:39</span>
                    <a class="blog-box__title-link" href="">
                        <h4 class="blog-box__item-title">Топ 5 электрощитов под ваши задачи</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
