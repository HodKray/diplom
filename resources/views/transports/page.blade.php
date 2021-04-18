@extends('admin')

@section('title', 'Транспорты')

@section('content_table')
    <h2 class="text-center ">Транспорты</h2>
    <div class="d-flex text-center">
        <table class="table table-dark mt-5">
            <tr>
                <th>id</th>
                <th>Транспорт</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            @foreach($transports as  $transport)
                <tr>
                    <td>{{$transport->id}}</td>
                    <td>{{$transport->title}}</td>
                    <td><a href="/transports/update/{{$transport->id}}">
                            <button class="btn btn-warning">Редактировать</button>
                        </a></td>
                    <td><a href="/transports/delete/{{$transport->id}}">
                            <button class="btn btn-danger">Удалить</button>
                        </a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
