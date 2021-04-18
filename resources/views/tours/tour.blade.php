@extends('layout')
@section('title')
    Тур {{$tour->services->cities->title}}
@endsection
@section('content')
    <div class="container my-4">
<div class="d-flex justify-content-center">
        <div class="cols col-lg-6">
            <p class="text-center">Тур №{{$tour->id}}</p>
            <p class="text-center">{{$tour->services->countries->cities->title}}</p>
            <img class="card-img rounded border border-4 border-info" src="/img/{{$tour->photo}}" alt="Фото тура">
            <div class="d-flex justify-content-center mt-4">
                <a class="btn btn-primary" href="/applications/create">Отправить заявку</a>
            </div>
        </div>
</div>
    </div>
@endsection
