@extends('layouts')
@section('content')
    <div class="container">
        <h5>8. Какие данные пользователя сайта из перечисленных можно считать на 100%
            достоверными: <b>cookie</b>, <b>данные сессии</b>, <b>IP-адрес пользователя</b> , <b>User-Agent</b>? Почему?</h5>
        <h4>Decision:</h4>


        <h5><b>IP-адрес</b>: при использовании VPN, Tor browser шифруются данные и меняется IP. Убедиться в достоверности на 100% мы не можем. </h5>
        <h5><b>Cookie</b>: Отслеживает передвижение между страницами и сохраняет все на компьютере пользователя.
            Но их так же можно подменить(<i>если пользоваться публичными точками доступа в сеть</i>) или отключить пользователем.</h5>
        <h5><b>User agent</b>: Данные, которые отправляет браузер пользователя на сервер(<i>операционная система, плагины, размеры экрана, название браузера</i>).
            Другими словами: что бы корректно были отображены страницы у пользователя - нужен User Agent.
        </h5>
        <h5><b>Session</b>: схожи с cookie, но вся информация о передвижениях хранится на сервере. Работает до закрытия браузера. User не имеет
            доступ к сессии, а значит данные о передвижениях будут более точны.
        </h5>
        <h5><b>Заключение</b>: Я считаю, что эти данные не могут быть достоверными на 100%. Каждый пункт имеет свои функции и предназначение.
            В каждом пункте есть свои уловки, методы подмены данных.

        </h5>
    </div>

@endsection