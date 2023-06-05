@extends('layouts.app-master')

@section('title', 'Все товары')

@section('content')

    <section class="container-xxl">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-3">Все товары</h2>
            <div>
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Добавить</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Country</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>

                @foreach($products as $product)

                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->country->name }}</td>
                        <td>
                            <form action="{{ route('admin.product.edit', $product->id) }}">
                                @method('patch')
                                <button type="submit" class="btn">&#9998;</button>
                            </form>
                        <td>
                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn">&#10006;</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

        {{ $products->links() }}

    </section>

@endsection
