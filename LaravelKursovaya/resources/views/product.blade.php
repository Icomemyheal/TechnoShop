@extends('master')

@section('title', ' Shop: Товар')

@section('content')
        <section class="product">
          <div class="container">
            <div class="product__inner">
              <img src="/images/{{$product->image}}.jpg" alt="product__img" class="product__img">

              <div class="product__info-container">
                <div class="product__seller-container">
                  <p class="product__seller">Продавець: <span>Techno<span>Shop</span></span></p>
                </div>
                <div class="product__info">
                  <h3 class="product__name">{{$product->name}}</h3>
                  <span class="product__price"><span class="product__oldPrice">{{$product->getOldPrice()}}₴</span> {{$product->price}}₴</span>
                  <p class="product__stock">В наявності</p>
                </div>
                <p class="product__description">{{$product->description}}</p>

                <div class="product__btns">
                  <button type="button" class="product__home-btn">
                    <a href="/" class="product__home-link">На головну</a>
                  </button>
                  <form action="{{ route('basket-add', $product) }}" method="POST" class="product__form">
                      <button type="submit" role="button" class="product__btn-buy">
                            <span>Купити</span>
                      </button>
                      @csrf
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection
