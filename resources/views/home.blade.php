@extends('layouts.app-master')

@section('title', 'Главная')

@section('content')

    <section class="slider mb-5">
        <div class="container-xxl">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                    <button data-bs-target="#carousel" data-bs-slide-to="1"></button>
                    <button data-bs-target="#carousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/slider/1680767640a60444cf89b6d681e570adb9b6db086c.png') }}" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/16819869180e53b56430d28a9ee9b135fe1ff38290.png') }}" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/168310806279f823379af46851a739d5fff058e1e2.jpg') }}" alt="" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container-xxl">
            <h2 class="mb-4">Популярные товары</h2>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <img src="{{ asset('images/products/M5104631_001-preview.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Кроссовки</h5>
                            <p class="card-text">Летние-демисезонные</p>
                            <h4 class="fw-bold">2999 руб.</h4>
                        </div>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{ asset('images/products/M5104631_001-preview.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Кроссовки</h5>
                            <p class="card-text">Летние-демисезонные</p>
                            <h4 class="fw-bold">2999 руб.</h4>
                        </div>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{ asset('images/products/M5104631_001-preview.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Кроссовки</h5>
                            <p class="card-text">Летние-демисезонные</p>
                            <h4 class="fw-bold">2999 руб.</h4>
                        </div>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img src="{{ asset('images/products/M5104631_001-preview.jpg') }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Кроссовки</h5>
                            <p class="card-text">Летние-демисезонные</p>
                            <h4 class="fw-bold">2999 руб.</h4>
                        </div>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="end my-5"></section>

@endsection
