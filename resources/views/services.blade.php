@extends('layouts.app')

@section('title', 'Услуги - Мир Вольта')
@section('services_active', 'menu__list-link--active')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Услуги</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="services">
        <div class="services__preview preview">
            <div class="container">
                <div class="services__preview-title preview__title">
                    <h2 class="services__preview-title-text preview__title-text">Наши услуги</h2>
                </div>
            </div>
        </div>
        <div class="services__content">
            <h3 class="services__title">Перечень услуг</h3>
            <div class="container">
                <div class="services__content-inner">
                    <div class="services__items">
                        <div class="services__item">
                            <div class="services__icon-bg">
                                <img class="services__icon" src="{{asset('images/phone.png')}}" alt="Качество">
                            </div>
                            <h4 class="services__item-title">Позвоните нам</h4>
                            <div class="services__text-box">
                                <p class="services__item-text"><a class="services__item-link" href="tel:+79113885777">+7 (911) 388-57-77</a></p>
                            </div>
                        </div>
                        <div class="services__item">
                            <div class="services__icon-bg">
                                <img class="services__icon" src="{{asset('images/mail.png')}}" alt="Быстро">
                            </div>
                            <h4 class="services__item-title">Напишите на почту</h4>
                            <div class="services__text-box">
                                <p class="services__item-text"><a class="services__item-link" href="mailto:Mirvolta@bk.ru">Mirvolta@bk.ru</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
