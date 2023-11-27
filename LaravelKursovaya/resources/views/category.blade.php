@extends('master')

@section('title', 'Techno Shop: ' . $category->name)

@section('content')
    <section class="category">
        <div class="container">
            <div class="category__title-container">
                <h2 class="category__title">{{ $category->name }}</h2>
                @if($category->code == 'motherboards')
                    <p class="category__product-count">В наявності: <span>{{str_replace(['кі'], 'ких', $category->name)}} - {{ $category->products->count() }} шт.</span></p>
                    @elseif($category->code == 'cpu')
                    <p class="category__product-count">В наявності: <span>{{str_replace(['и'], 'ів', $category->name)}} - {{ $category->products->count() }} шт.</span></p>
                    @elseif($category->code == 'videocards')
                    <p class="category__product-count">В наявності: <span>{{str_replace(['и'], '', $category->name)}} - {{ $category->products->count() }} шт.</span></p>
                    @elseif($category->code == "ram")
                    <p class="category__product-count">В наявності: <span>{{str_replace(['на'], 'ної', $category->name)}} - {{ $category->products->count() }} шт.</span></p>
                    @elseif($category->code == 'hdd')
                    <p class="category__product-count">В наявності: <span>{{str_replace(['і'], 'их', $category->name)}} - {{ $category->products->count() }} шт.</span></p>
                    @elseif($category->code == 'frostsystem')
                    <p class="category__product-count">В наявності: <span>{{str_replace(['а'], '', $category->name)}} - {{ $category->products->count() }} шт.</span></p>
                    @else
                    <p>Не існуюча категорія</p>
                @endif
            </div>
            <div class="category__inner">
                <ul class="category__list">
                    @foreach ($category->products as $product)
                        @include('categoryCard', compact('product'))
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection