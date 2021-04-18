@extends('admin')
@section('title', 'Добавить город')
@section('content_table')

    <div class="container">
        <h2 class="text-center mt-3">Добавить город</h2>
        <div class="d-flex justify-content-center mt-5">
            <form action="/cities/create" method="post">
                @csrf
                <label class="form-label mt-3" for="title">Название города</label>
                <input class="form-control" type="text" name="title">
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
@endsection
