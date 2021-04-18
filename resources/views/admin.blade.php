@extends('layout')

@section('title', 'Админ панель')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-2 mt-5">
                <div class="btn-group-vertical ">
                    <p>Услуги</p>
                    <a class="btn btn-outline-info " href="/services">Услуги</a>
                    <a class="btn btn-outline-info " href="/services/create">Создать услугу</a>
                </div>
                <div class="btn-group-vertical mt-5">
                    <p>Туры</p>
                    <a class="btn btn-outline-info " href="/tours">Туры</a>
                    <a class="btn btn-outline-info px-4" href="/tours/create">Создать тур</a>
                </div>
                <div class="btn-group-vertical mt-5">
                    <p>Города</p>
                    <a class="btn btn-outline-info " href="/cities">Города</a>
                    <a class="btn btn-outline-info " href="/cities/create">Добавить город</a>
                </div>
                <div class="btn-group-vertical mt-5">
                    <p>Страны</p>
                    <a class="btn btn-outline-info " href="/countries">Страны</a>
                    <a class="btn btn-outline-info " href="/countries/create">Добавить Страну</a>
                </div>
                <div class="btn-group-vertical mt-5">
                    <p>Транспорты</p>
                    <a class="btn btn-outline-info " href="/transports">Транспорты</a>
                    <a class="btn btn-outline-info " href="/transports/create">Добавить Транспорты</a>
                </div>
            </div>
            <div class="col-10">
                @yield('content_table')
            </div>
        </div>
    </div>
@endsection
