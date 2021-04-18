@extends('layout')
@section('title', 'Туры')
@section('content')

        <div class="container mt-5">
            <h2 class="text-center my-3">Туры</h2>
            <div class="row mx-4">
            @foreach($tours as $tour)
                <div class="col-lg-4 my-3">
                <p class="text-center">{{$tour->services->cities->title}}</p>
                    <a href="tours/tour/{{$tour->id}}">
                <img class="card-img rounded border border-4 border-info" src="/img/{{$tour->photo}}" alt="Фото">
                        <div class="d-flex justify-content-center mt-3">
                            <a  href="tours/tour/{{$tour->id}}">
                                <button class="btn btn-primary transform">Подробнее</button>
                            </a>
                        </div>
                    </a>
                </div>
            @endforeach
                <div class="d-flex justify-content-center mt-4">{{ $tours->links()}}</div>
            </div>
        </div>



@endsection
