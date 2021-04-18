@extends('layout')
@section('title', 'Главная')
@section('content')
<div class="container col-lg-12">
    <div class="wrap">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img class="card-img" src="/img/slide-1.jpg" alt="" >
                </div>
                <div class="carousel-item">
                    <img class="card-img" src="/img/slide-2.jpg" alt="" >
                </div>
                <div class="carousel-item">
                    <img class="card-img" src="/img/slide-3.jpg" alt="" >
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

            </a>
        </div>
        <div class="d-flex justify-content-center">
        <div class="button">
            <a  href="/toursAll">
                <button class="btn btn-info py-2 px-5">Заказать тур</button>
            </a>
        </div>
        </div>
    </div>
</div>



    <div class="container mt-4">
        <h2 class="text-center my-3">Туры</h2>
        <div class="row mx-4">
            @foreach($tours as $tour)
                <div class="col-lg-3 mb-3 " >
                    <p class="text-center">{{$tour->services->countries->cities->title}}</p>
                    <a class="transform"  href="tours/tour/{{$tour->id}}">
                    <img class="card-img rounded border border-4 border-info"  src="/img/{{$tour->photo}}" alt="Фото">
                    <div class="d-flex justify-content-center mt-3">
                        <a  href="tours/tour/{{$tour->id}}">
                            <button class="btn btn-primary transform">Подробнее</button>
                        </a>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-3">{{ $tours->links()}}</div>
    </div>

@endsection
