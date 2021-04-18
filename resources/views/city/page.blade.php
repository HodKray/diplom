@extends('admin')

@section('title', 'Города')

@section('content_table')
    <h2 class="text-center ">Города</h2>
    <div class="d-flex text-center">
        <table class="table table-dark mt-5">
            <tr>
                <th>id</th>
                <th>Город</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            @foreach($cities as  $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td>{{$city->title}}</td>
                    <td>
                        <a href="/cities/update/{{$city->id}}">
                            <button class="btn btn-warning">Редактировать</button>
                        </a>
                    </td>
                    <td>
                        <a href="/cities/delete/{{$city->id}}">
                            <button class="btn btn-danger">Удалить</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
