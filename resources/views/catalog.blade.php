@extends('layouts.app-master')

@section('title', 'Каталог')

@section('content')

    <section class="products">
        <div class="container-xxl">
            <h2 class="mb-4">Товары</h2>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('images/products') . '/' . $product->img }}" alt="{{ $product->name }}" class="card-img-top">
                            <div class="card-body">
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
    </section>

    <section class="end my-5"></section>

@endsection
