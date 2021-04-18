@extends('layout')
@section('title','Регистрация')
@section('content')
    <div class="container mt-3">
        <h2 class="text-center">Регистрация</h2>
        <div class="d-flex justify-content-center mt-3">
            <form action="/registration" method="post">
                @csrf
                <label class="form-label" for="login">Логин</label>
                <input class="form-control" type="text" name="login" required>
                <label class="form-label" for="email">email</label>
                <input class="form-control" type="email" name="email" required>

                <label class="form-label" for="telephone">Телефон</label>
                <input class="form-control"  type="tel" name="telephone"  required >

                <label class="form-label" for="password">Пароль</label>
                <input class="form-control" type="password" name="password" required>
                <label class="form-label" for="confirm_password">Подтверждение пароля</label>
                <input class="form-control" type="password" name="confirm_password" required>
                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-primary" type="submit" value="Зарегистрироваться">
                </div>

            </form>
        </div>
    </div>
@endsection
