@extends('layouts.app-master')

@section('title', 'Каталог')

@section('content')

    <section class="basket">
        <div class="container-xxl">
            <h2 class="mb-4">Корзина</h2>
            <div class="row basket__inner">
                @foreach($cart as $product)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('images/products') . '/' . $product->img }}" alt="{{ $product->name }}" class="card-img-top">
                            <div class="card-body">
                                <a href="{{ route('card', $product->id) }}" class="text-decoration-none text-reset">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                </a>
                                <p class="card-text">{{ $product->category->name }}</p>
                                <p class="card-text">Количество: {{ $product->pivot->amount }}</p>
                                <h4 class="fw-bold">Сумма: {{ $product->price * $product->pivot->amount }} руб.</h4>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="end my-5"></section>

@endsection
