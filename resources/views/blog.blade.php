@extends('layouts.app')

@section('title', 'Блог - Мир Вольта')
@section('blog_active', 'menu__list-link--active')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="#">Блог</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="blog">
        <div class="blog__preview preview">
            <div class="container">
                <div class="blog__preview-title preview__title">
                    <h2 class="blog__preview-title-text preview__title-text">Блог</h2>
                </div>
            </div>
        </div>
        <div class="blog__content">
            <div class="about__content">
                <div class="container">
                    <div class="about__content-inner">
                        <div class="row">
                            @foreach($posts as $post)
{{--                            <div class="col-md-4 blog-post" data-aos="fade-up">--}}
{{--                                <div class="blog-post__preview">--}}
{{--                                    <img src="{{'storage/' . $post->preview_image}}" alt="Превью поста" class="blog-post__preview-image">--}}
{{--                                </div>--}}
{{--                                <p class="blog-post__category">{{$post->category->title}}</p>--}}
{{--                                <a href="" class="blog-post__permalink">--}}
{{--                                    <h6 class="blog-post__title">{{$post->title}}</h6>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                        <div class="card-body d-flex flex-column align-items-start">
                                            <strong class="d-inline-block mb-2 text-primary">{{$post->category->title}}</strong>
                                            <h3 class="mb-0">
                                                <a class="text-dark" href="#">{{$post->title}}</a>
                                            </h3>
                                            <div class="mb-1 text-muted">{{$post->created_at}}</div>
                                            <p class="card-text mb-auto">Здесь мб будет краткая часть статьи</p>
                                            <a href="#">Читать полностью</a>
                                        </div>
                                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Превью поста" style="width: 200px; height: 250px;" src="{{'storage/' . $post->preview_image}}" data-holder-rendered="true">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
