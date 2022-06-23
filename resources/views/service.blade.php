@extends('layouts.app')

@section('title', 'О компании')
@section('blog_active', 'menu__list-link--active')

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
                <li class="breadcrumbs__item">{{$service->title}}</li>
            </ul>
        </div>
    </div>
    <section class="about">
        <div class="blog__preview preview">
            <div class="container">
                <div class="blog__preview-title preview__title">
                    <h2 class="blog__preview-title-text preview__title-text">Наши услуги</h2>
                </div>
            </div>
        </div>
        <div class="post__content">
            <div class="container">
                <div class="post__content-inner">
                    <div class="row">
                        <div class="post__content-box">
                            <div class="post__content-title">
                                <h3 class="post__content-title-text">{{$service->title}}</h3>
                            </div>
                            <div class="post__content-image">
                                <img src="{{asset('storage/' . $service->main_image)}}" alt="Мир Вольта - Услуги">
                            </div>
                            <div class="post__content-text">
                                <p class="post__content-text-item">{!! $service->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
