@extends('master')

@section('title', 'Techno Shop: Усі категорії')

@section('content')
    <section class="categories">
        <div class="container">
            <div class="categories__inner">
                <h3 class="categories__title">Категорії</h3>

                <ul class="categories__list">
                    @foreach ($categories as $category)
                    <li class="categories__item">
                        <a href="{{ route('category', $category->code) }}" class="categories__link">
                            <img src="/images/{{ $category->image }}.png" alt="category__image" class="categories__image">
                            <p>{{$category->name}}</p>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection