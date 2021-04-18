@extends('admin')
@section('title', 'Редактировать название транспорта')
@section('content_table')

    <div class="container">
        <h2 class="text-center mt-3">Редактировать название транспорта</h2>
        <div class="d-flex justify-content-center mt-5">
            <form action="/transports/update/{{$transport->id}}" method="post">
                @csrf
                <label class="form-label mt-3" for="title">Название транспорта</label>
                <input class="form-control" type="text" name="title">
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Редактировать">
                </div>
            </form>
        </div>
    </div>
@endsection
