@extends('admin')
@section('title', 'Редактировать название города')
@section('content_table')

    <div class="container">
        <h2 class="text-center mt-3">Редактировать название города</h2>
        <div class="d-flex justify-content-center mt-5">
            <form action="/cities/update/{{$city->id}}" method="post">
                @csrf
                <label class="form-label mt-3" for="title">Название города</label>
                <input class="form-control" type="text" name="title" value="{{$city->title}}">
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Редактировать">
                </div>
            </form>
        </div>
    </div>
@endsection
