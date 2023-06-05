@extends('layouts.app-master')

@section('title', 'О нас')

@section('content')

<section class="">
    <div class="container-xxl">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('images/product') . '/' . $product->img }}" class="img-fluid rounded-start" alt="{{ $product->name }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->category->name }}</p>
                        <p class="card-text"><small class="text-muted">{{ $product->country->name }}</small></p>
                        <h4 class="fw-bold">{{ $product->price }} руб.</h4>
                        <button class="btn btn-primary" data-id="{{ $product->id }}">В корзину</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
