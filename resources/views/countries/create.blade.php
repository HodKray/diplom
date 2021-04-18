@extends('admin')
@section('title', 'Добавить страну')
@section('content_table')

    <div class="container">
        <h2 class="text-center mt-3">Добавить страну</h2>
        <div class="d-flex justify-content-center mt-5">
            <form action="/countries/create" method="post" enctype="multipart/form-data">
                @csrf
                <label class="form-label mt-3" for="title">Название страны</label>
                <input class="form-control" type="text" name="title">
                <label for="city_id " class="form-label mt-3">Город</label>
                <select class="form-select " name="city_id">
                    @foreach($cities as $city)
                        <div class="form_input">
                            <option value="{{$city->id}}">{{$city->title}}</option>
                        </div>
                    @endforeach
                </select>
                <label class="form-label mt-3" for="photo_country">Фото страны</label>
                <input class="form-control" type="file" name="photo_country">
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
@endsection
