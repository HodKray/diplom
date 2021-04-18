@extends('admin')

@section('title', 'Услуги')

@section('content_table')
    <h2 class="text-center ">Услуги</h2>
    <div class="d-flex text-center">
        <table class="table table-dark mt-5">
            <tr>
                <th>id</th>
                <th>Страна</th>
                <th>Город</th>
                <th>Проживание</th>
                <th>Питание</th>
                <th>Экскурсии</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            @foreach($services as  $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>{{$service->countries->title}}</td>
                    <td>{{$service->countries->cities->title}}</td>
                    <td>{{$service->residence}}</td>
                    <td>{{$service->feeding}}</td>
                    <td>{{$service->excursion}}</td>
                    <td><a href="/services/service_update/{{$service->id}}">
                            <button class="btn btn-warning">Редактировать</button>
                        </a></td>
                    <td><a  href="/services/delete/{{$service->id}}">
                            <button class="btn btn-danger">Удалить</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
