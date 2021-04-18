@extends('admin')
@section('title', 'Создать услуги')
@section('content_table')

    <div class="container">
        <h2 class="text-center mt-3">Создать услугу</h2>
        <div class="d-flex justify-content-center mt-5">
            <form action="/services/update/{{$service->id}}" method="post">
                @csrf
                <label for="citi_id" class="form-label">Город</label>
                <select class="form-select" name="citi_id">
                    @foreach($cities as $city)
                        <div class="form_input">
                            <option value="{{$city->id}}">{{$city->title}}</option>
                        </div>
                    @endforeach
                </select>
                <label class="form-label mt-3" for="residence">Проживание</label>
                <input class="form-control" type="text" name="residence" value="{{$service->residence}}" >

                <label class="form-label mt-3" for="feeding">Питание</label>
                <input class="form-control" type="text" name="feeding" value="{{$service->feeding}}" >

                <label class="form-label mt-3" for="feeding">Экскурсии</label>
                <input class="form-control" type="text" name="excursion" value="{{$service->excursion}}">
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Редактировать">
                </div>
            </form>
        </div>
    </div>
@endsection
