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
                    <a class="breadcrumbs__link" href="#">О компании</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="about">
        <div class="blog__preview preview">
            <div class="container">
                <div class="blog__preview-title preview__title">
                    <h2 class="blog__preview-title-text preview__title-text">Блог</h2>
                </div>
            </div>
        </div>
        <div class="post__content">
            <div class="container">
                <div class="post__content-inner">
                    <div class="row">
                        <div class="post__content-box">
                            <div class="post__content-title">
                                <h3 class="post__content-title-text">{{$post->title}}</h3>
                            </div>
                            <div class="post__content-image">
                                <img src="{{asset('storage/' . $post->main_image)}}" alt="Мир Вольта - Блог">
                            </div>
                            <div class="post__content-text">
                                <p class="post__content-text-item">{!! $post->content !!}</p>
                            </div>
                        </div>
                        @if($relatedPosts->count() > 0)
                            <div class="post__related-posts">
                                <h4 class="post__related-posts-title">Схожие посты</h4>
                                @foreach($relatedPosts as $relatedPost)
                                    <div class="col-md-6" data-aos="fade-up">
                                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                            <div class="card-body d-flex flex-column align-items-start">
                                                <strong
                                                    class="d-inline-block mb-2 text-primary">{{$relatedPost->category->title}}</strong>
                                                <h3 class="mb-0">
                                                    <a class="text-dark"
                                                       href="{{{route('post.show', $relatedPost->id)}}}">{{$relatedPost->title}}</a>
                                                </h3>
                                                <div class="mb-1 text-muted">{{$relatedPost->created_at}}</div>
                                                <p class="card-text mb-auto">Здесь возможно будет краткая часть
                                                    статьи</p>
                                                <a href="{{{route('post.show', $relatedPost->id)}}}">Читать
                                                    полностью</a>
                                            </div>
                                            <img class="card-img-right flex-auto d-none d-md-block"
                                                 data-src="holder.js/200x250?theme=thumb" alt="Превью поста"
                                                 style="width: 200px; height: 250px;"
                                                 src="{{'../storage/' . $relatedPost->preview_image}}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
