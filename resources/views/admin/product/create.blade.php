@extends('layouts.app-master')

@section('title', 'Добавить товар')

@section('content')

    <section class="container-xxl">
        <h2 class="mb-3">Создание товара</h2>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="photo" class="form-label">Фотографии</label>

                <input name="images[]"
                       class="form-control @error('images.*', 'images') is-invalid @enderror"
                       type="file"
                       id="photo"
                       multiple>

                @error('images.*', 'images')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Наименование</label>
                <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Цена</label>
                <input name="price" type="number" class="form-control" id="price" value="{{ old('price') }}" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Категория</label>
                <select name="category_id" class="form-select" id="category" required>

                    <option
                        {{ !old('category_id') ? 'selected' : '' }}
                        disabled>--- Выберите категорию ---</option>

                    @foreach($categories as $category)

                        <option
                            {{ (int) old('category_id') === $category->id ? 'selected' : '' }}
                            value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Страна</label>
                <select name="country_id" class="form-select" id="country" required>

                    <option
                        {{ !old('country_id') ? 'selected' : '' }}
                        disabled>--- Выберите страну-изготовитель ---</option>

                    @foreach($countries as $country)

                        <option
                            {{ (int) old('country_id') === $country->id ? 'selected' : '' }}
                            value="{{ $country->id }}">{{ $country->name }}</option>

                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
            @csrf
        </form>
    </section>

@endsection
