@extends('admin')
@section('title', 'Создать услуги')
@section('content_table')

    <div class="container">
        <h2 class="text-center mt-3">Создать услугу</h2>
        <div class="d-flex justify-content-center mt-5">
            <form action="/services/create" method="post">
                @csrf
                    <label for="countries_id" class="form-label">Страна </label>
                    <select class="form-select" name="countries_id">
                        @foreach($countries as $country)
                            <div class="form_input">
                                <option value="{{$country->id}}">{{$country->title}} г.{{$country->cities->title}}</option>
                            </div>
                        @endforeach
                    </select>
                <label class="form-label mt-3" for="residence">Проживание</label>
                <input class="form-control" type="text" name="residence">

                <label class="form-label mt-3" for="feeding">Питание</label>
                <input class="form-control" type="text" name="feeding">

                <label class="form-label mt-3" for="feeding">Экскурсии</label>
                <input class="form-control" type="text" name="excursion">
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Создать">
                </div>
            </form>
        </div>
    </div>
@endsection
