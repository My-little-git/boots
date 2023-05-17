@extends('layouts.app-master')

@section('title', 'Вход в админку')

@section('content')

    <section class="auth mt-5">
        <div class="container-xxl">
            <form action="{{ route('admin.login_process') }}" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                @csrf
            </form>
        </div>
    </section>

@endsection
