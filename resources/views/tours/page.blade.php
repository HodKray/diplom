@extends('admin')

@section('title', 'Туры')

@section('content_table')
    <h2 class="text-center ">Туры</h2>
    <div class="d-flex text-center">
        <table class="table table-dark mt-5">
            <tr>
                <th>id</th>
                <th>Город</th>
                <th>Дата отправления</th>
                <th>Дата прибытия</th>
                <th>Cтоимость тура</th>
                <th>Транспорт</th>
                <th>Количество человек</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>

            @foreach($tours as  $tour)
                <tr>
                    <td>{{$tour->id}}</td>
                    <td>{{$tour->services->countries->cities->title}}</td>
                    <td>{{$tour->departure_date}}</td>
                    <td>{{$tour->arrival_date}}</td>
                    <td>{{$tour->price}}</td>
                    <td>{{$tour->transports->title}}</td>
                    <td>{{$tour->quantity_man}}</td>
                    <td><a href="/tours/update/{{$tour->id}}">
                            <button class="btn btn-warning">Редактировать</button>
                        </a></td>
                    <td><a href="/tours/delete/{{$tour->id}}">
                            <button class="btn btn-danger">Удалить</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
