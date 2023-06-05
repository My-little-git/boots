@extends('layouts.app-master')

@section('title', 'Главная')

@section('content')

    <section class="slider mb-5">
        <div class="container-xxl">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @for($i = 0; $i < count($products); $i++)
                        <button data-bs-target="#carousel" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></button>
                    @endfor
                </div>
                <div class="carousel-inner">
                    @foreach($products as $product)
                        <div class="carousel-item {{ $products[0] === $product ? "active" : '' }}">
                            <div class="card mb-3 w-75 mx-auto">
                                <div class="row g-0">
                                    <div class="col-md-7">
                                        <img src="{{ asset('images/product') . '/' . $product->img }}" class="img-fluid rounded-start w-100" alt="{{ $product->name }}">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-text">{{ $product->category->name }}</p>
                                            <h4 class="fw-bold">{{ $product->price }} руб.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

@endsection
