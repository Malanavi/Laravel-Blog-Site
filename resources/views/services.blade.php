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
                <li class="breadcrumbs__item">Услуги</li>
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
                        @foreach($services as $service)
                            <div class="services__card">
                                <img src="{{'storage/' . $service->preview_image}}" alt="Мир Вольта - Услуга">
                                <div class="services__card-body card-body">
                                    <h5 class="services__card-title card-title">{{$service->title}}</h5>
                                    <p class="services__card-text card-text">{{$service->description}}</p>
                                    <p class="services__card-price card-price"><small class="text-muted">{{$service->price}}</small></p>
                                    <a class="services__card-button button" href="{{route('service.show', $service->id)}}">Подробнее</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
