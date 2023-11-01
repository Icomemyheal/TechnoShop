@extends('master')

@section('title', 'Techno Shop: ' . $category->name)

@section('content')
    <div class="container">
        <h3 class="h3-custom-cpu-title">
            {{ $category->name }}
        </h3>
        <h4>Всього {{$category->name}} {{ $category->products->count() }} шт.</h4> 
        <div class="row">
            @foreach ($category->products as $product)
                @include('categoryCard', compact('product'))
            @endforeach
        </div>
    </div>
@endsection