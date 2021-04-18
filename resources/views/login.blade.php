@extends('layout')
@section('title','Авторизация')
@section('content')
    <div class="container mt-3">
        <h2 class="text-center">Авторизация</h2>
        <div class="d-flex justify-content-center mt-3">
            <form action="/login" method="post">
                @csrf
                <label class="form-label" for="login">Логин</label>
                <input class="form-control" type="text" name="login" required>
                <label class="form-label" for="password">Пароль</label>
                <input class="form-control" type="password" name="password" required>
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-primary" type="submit" value="Войти">
                </div>

            </form>
        </div>
    </div>
@endsection
