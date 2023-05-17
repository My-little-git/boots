@extends('layouts.app-master')

@section('title', 'Регистрация')

@section('content')

    <section class="auth mt-5">
        <div class="container-xxl">
            <form action="{{ route('register_process') }}" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input name="surname" type="text" class="form-control" id="surname">
                </div>
                <div class="mb-3">
                    <label for="patronymic" class="form-label">Patronymic</label>
                    <input name="patronymic" type="text" class="form-control" id="patronymic">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Повторите пароль</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                </div>
                <a href="{{ route('login') }}" class="d-block mb-3">Войти</a>
                <button type="submit" class="btn btn-primary">Submit</button>
                @csrf
            </form>
        </div>
    </section>

@endsection
