@extends('admin')

@section('title', 'Страны')

@section('content_table')
    <h2 class="text-center ">Страны</h2>
    <div class="d-flex text-center">
        <table class="table table-dark mt-5">
            <tr>
                <th>id</th>
                <th>Страна</th>
                <th>Город</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            @foreach($countries as  $country)
                <tr>
                    <td>{{$country->id}}</td>
                    <td>{{$country->title}}</td>
                    <td>{{$country->cities->title}}</td>
                    <td>
                        <a href="/countries/update/{{$country->id}}">
                            <button class="btn btn-warning">Редактировать</button>
                        </a>
                    </td>
                    <td>
                        <a href="/countries/delete/{{$country->id}}">
                            <button class="btn btn-danger">Удалить</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
