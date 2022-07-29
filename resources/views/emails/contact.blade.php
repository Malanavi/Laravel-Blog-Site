{{--@component('mail::message')--}}

{{--    <p>{{$name}} - Имя клиента</p>--}}
{{--    <p>{{$phone}} - Телефон клиента</p>--}}

{{--    @if($email)--}}
{{--        <p>{{$email}} - E-mail клиента</p>--}}
{{--    @endif--}}

{{--    <p>{{$comment}} - Комментарий клиента</p>--}}

{{--    @component('mail::button', ['url'=>'www.google.com'])--}}
{{--        Ну норм--}}
{{--    @endcomponent--}}

{{--@endcomponent--}}

<h1>Данные с формы обратной связи</h1>
<p>Имя клиента: {{$name}}</p>
<p>Телефон клиента: {{$phone}}</p>
@if($email)
    <p>E-mail клиента: {{$email}}</p>
@endif
<p>Комментарий клиента: {{$comment}}</p>
