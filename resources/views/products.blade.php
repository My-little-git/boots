@extends('layouts.app-master')

@section('title', 'Каталог')

@section('content')

    <section class="products">
        <div class="container-xxl">
            <h2 class="mb-4">Товары</h2>
            <div class="row">
                <div class="col-8 row row-cols-4 g-3">
                    @foreach($products as $product)
                        <div class="col">
                            <div class="card h-100 justify-content-between">
                                <img src="{{ asset('images/product') . '/' . $product->img }}" alt="{{ $product->name }}" class="card-img-top">
                                <div class="card-body flex-grow-0">
                                    <a href="{{ route('card', $product->id) }}" class="text-decoration-none text-reset">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                    </a>
                                    <p class="card-text">{{ $product->category->name }}</p>
                                    <h4 class="fw-bold">{{ $product->price }} руб.</h4>
                                    <button class="btn btn-primary add-cart" data-id="{{ $product->id }}">В корзину</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="end my-5"></section>

@endsection
