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
                    <p class="offer__subtitle-text">Мы быстро и качественно решаем любые ваши задачи</p>
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
    <div class="popups">
        <div class="popups__inner" id="popup-offer-trigger">
            <div class="popups__popup popups__offer-popup">
                <a class="popups__close-button">X</a>
                <h3 class="popups__popup-label">Оставить заявку</h3>
                <p class="popups__popup-description">Мы свяжемся с Вами в ближайшее время</p>
                <form id="contactform" method="POST">
                    @csrf
                    <div id="sendmessage">
                        Ваше сообщение отправлено!
                    </div>
                    <div id="senderror">
                        При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>
                    </div>

                    <div class="popups__popup-item">
                        <input type="text" name="name" placeholder="Введите Имя" value="{{old('name')}}">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="popups__popup-item">
                        <input type="text" name="phone" placeholder="Введите номер телефона" value="{{old('phone')}}">
                        @error('phone')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="popups__popup-item">
                        <input type="email" name="email" placeholder="Введите E-mail (опционально)" value="{{old('email')}}">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="popups__popup-item">
                        <span>Комментарий (описание задачи): </span>
                        <textarea name="comment" id="" cols="30" rows="5">{{old('comment')}}</textarea>
                        @error('comment')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="popups__popup-button button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="slider">
        <div class="slider__item slider__item--1">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">ПРОВОДКА</h3>
                    <h4 class="slider__subtitle">В КВАРТИРХ, ДОМАХ, И ДРУГИХ ПОМЕЩЕНИЯХ</h4>
                    <p class="slider__text">В своём стремлении повысить качество жизни, они забывают, что убеждённость некоторых оппонентов играет определяющее значение для позиций, занимаемых участниками в отношении поставленных задач. Банальные, но неопровержимые выводы, а также некоторые особенности внутренней политики, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--2">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">СБОР И МОДЕРНИЗАЦИЯ</h3>
                    <h4 class="slider__subtitle">ЭЛЕКТРОЩИТОВОГО ОБОРУДОВАНИЯ ЛЮБЫХ ВИДОВ</h4>
                    <p class="slider__text">В рамках спецификации современных стандартов, акционеры крупнейших компаний и по сей день остаются уделом либералов, которые жаждут быть смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности! В своём стремлении повысить качество жизни, они забывают, что постоянное информационно-пропагандистское обеспечение нашей деятельности требует анализа новых предложений.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--3">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">УСТАНОВКА</h3>
                    <h4 class="slider__subtitle">РОЗЕТОК, ВЫКЛЮЧАТЕЛЕЙ, СВЕТИЛЬНИКОВ</h4>
                    <p class="slider__text">Противоположная точка зрения подразумевает, что стремящиеся вытеснить традиционное производство, нанотехнологии объективно рассмотрены соответствующими инстанциями. Прежде всего, граница обучения кадров способствует подготовке и реализации экономической целесообразности принимаемых решений.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--4">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">ОДНОВРЕМЕННАЯ УКЛАДКА КАБЕЛЕЙ</h3>
                    <h4 class="slider__subtitle">ПОД ИНТЕРНЕТ, ТЕЛЕВИДЕНИЕ И ВИДЕОНАБЛЮДЕНИЕ</h4>
                    <p class="slider__text">Ясность нашей позиции очевидна: начало повседневной работы по формированию позиции является качественно новой ступенью первоочередных требований. С другой стороны, существующая теория выявляет срочную потребность системы массового участия.</p>
                </div>
            </div>
        </div>
        <div class="slider__item slider__item--5">
            <div class="container">
                <div class="slider__item-inner">
                    <h3 class="slider__title">и это еще</h3>
                    <h4 class="slider__subtitle">далеко не все</h4>
                    <p class="slider__text">С полный спектром наших услуг можно ознакомиться <a href="{{route('main.services')}}">здесь</a>. Если вы не нашли подходящей услуги, не стоит отчаиваться! Наши специалисты смогут предложить оптимальное решение под ваши нужды.
                        </p>
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
                    <p class="advantages__item-text">Только надёжные и проверенные поставщики, высококвалифицированные сотрудники</p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__icon-bg">
                        <img class="advantages__icon" src="{{asset('images/speed.svg')}}" alt="Быстро">
                    </div>
                    <h4 class="advantages__item-title">В срок</h4>
                    <p class="advantages__item-text">Ответственное и качественное исполенение. Строгая оптимизация рабочих процессов.</p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__icon-bg">
                        <img class="advantages__icon" src="{{asset('images/price.svg')}}" alt="Низкая цена">
                    </div>
                    <h4 class="advantages__item-title">По оптимальной цене</h4>
                    <p class="advantages__item-text">У нас гибкая финансовая политика. Мы учитываем ваши пожелания и финансовые возможности.</p>
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
    <section class="blog-box">
        <div class="container">
            <h3 class="blog-box__title">Наши проекты и блог</h3>
            <div class="blog-box__items">
                @foreach($posts as $post)
                    <div class="blog-box__item">
                        <a class="blog-box__img-link" href="{{route('post.show', $post->id)}}">
                            <img class="blog-box__img" src="{{'storage/' . $post->preview_image}}" alt="Мир Вольта - Блог">
                        </a>
                        <span class="blog-box__item-date">{{$post->created_at}}</span>
                        <a class="blog-box__title-link" href="{{route('post.show', $post->id)}}">
                            <h4 class="blog-box__item-title">{{$post->title}}</h4>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
