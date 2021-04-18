@extends('admin')
@section('title', 'Добавить транспорт')
@section('content_table')

    <div class="container">
        <h2 class="text-center mt-3">Добавить транспорта</h2>
        <div class="d-flex justify-content-center mt-5">
            <form action="/transports/create" method="post">
                @csrf
                <label class="form-label mt-3" for="title">Название транспорта</label>
                <input class="form-control" type="text" name="title">
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
@endsection
