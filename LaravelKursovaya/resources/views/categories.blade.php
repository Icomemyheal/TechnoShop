@extends('master')

@section('title', 'Techno Shop: Усі категорії')

@section('content')
    <div class="container">
        <h3 class="text-left title__categories">Комп'ютерні комплектуючі</h3>
        <div class="row text-center product-container">
            @foreach ($categories as $category)
            <div class="col-sm product-card">
                <img src="/images/{{ $category->image }}.jpg" alt="motherboard" class="motherboard">
                <a href="{{ route('category', $category->code) }}" target="_blank" class="product-link"><p>{{$category->name}}</p></a>
            </div>
            @endforeach
        </div>
    </div>
@endsection