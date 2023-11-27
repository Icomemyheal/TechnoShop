@extends('master')

@section('title', 'Techno Shop: Усі категорії')

@section('content')
    <section class="categories">
        <div class="container">
            <div class="categories__inner">
                <h3 class="categories__title">Комп'ютерні комплектуючі</h3>

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
    {{-- <div class="container">
        <h3 class="text-left title__categories">Комп'ютерні комплектуючі</h3>
        <div class="row text-center product-container">
            @foreach ($categories as $category)
            <div class="col-sm product-card">
                <img src="/images/{{ $category->image }}.jpg" alt="motherboard" class="motherboard">
                <a href="{{ route('category', $category->code) }}" target="_blank" class="product-link"><p>{{$category->name}}</p></a>
            </div>
            @endforeach
        </div>
    </div> --}}
@endsection