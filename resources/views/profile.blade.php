@extends('layout')
@section('title','Личный кабинет')
@section('content')
    <div class="container  mt-5">


        <div class="row col-12">
            <h2 class="text-center">Ваши данные</h2>
            <div class="d-flex justify-content-center my-3">
                <img class="rounded-circle mx-3" src="/img/{{Auth::user()->photo_user}}" alt="Автатарка" width="150" height="150">
            </div>

            <p class="text-center fw-bold mt-4">{{Auth::user()->login}}</p>
            <p class="text-center fw-bold">{{Auth::user()->email}}</p>
            <p class="text-center fw-bold">{{Auth::user()->telephone}}</p>

            <a href="#">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary mx-2 mt-3 col-lg-2">Редактировать</button>
                </div>
            </a>
        </div>






@endsection
