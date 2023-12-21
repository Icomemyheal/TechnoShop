@extends('master')

@section('title', 'Techno Shop: Корзина')

@section('content')
<section class="basket">
  <div class="container">
    <div class="basket__inner">
      <h2 class="basket__title">Кошик</h2>

      <ul class="basket__product-list js-basket-list">
        @foreach ($order->products as $product)
        <li class="basket__product-item">
          <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="basket__img-link">
            <img src="/images/{{$product->image}}.jpg" class="basket__product-img" alt="product">
          </a>
    
          <div class="basket__info-product">
            <h3 class="basket__product-name">{{$product->name}}</h3>
            <div class="basket__product-btns">
              <form action="{{ route('basket-remove', $product) }}" method="POST" class="basket__form-remove">
                <button type="submit" role="button" class="basket__btn-decrement">
                  <svg class="icon-minus">
                    <use xlink:href="/images/Sprite.svg#icon-minus"></use>
                  </svg>
                </button>
              @csrf
              <input type="number" value="{{ $product->pivot->count }}" class="basket__product-count" readonly>
              </form>
              <form action="{{ route('basket-add', $product) }}" method="POST" class="basket__form-add">
                <button type="submit" role="button" class="basket__btn-increment">
                  <svg class="icon-plus">
                    <use xlink:href="/images/Sprite.svg#icon-plus"></use>
                  </svg>
                </button>
              @csrf
              </form>
            </div>
          </div>
          <div class="basket__product-priceInfo">
            <p class="basket__product-price">Ціна: <span class="basket__product-oldPrice">{{$product->getOldPrice()}}₴</span> <span class="basket__product-currentPrice">{{$product->price}}₴</span></p>
            <p class="basket__product-totalCost">Вартість замовлення: <span>{{$product->getProductPriceForCount()}}₴</p>
          </div>
        </li>
        @endforeach
      </ul>

      <div class="basket__order-inner">
        <h2 class="basket__order-title">Замовлення</h2>
        <ul class="basket__order-list js-order-list">
          @foreach($order->products as $product)
            <li class="basket__order-item">
              <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="basket__img-link">
                <img src="/images/{{$product->image}}.jpg" class="basket__product-img" alt="product">
              </a>
              <div class="basket__order-info">
                <h3 class="basket__product-name">{{$product->name}}</h3>
                <p class="basket__order-count">Загальна кількість товару: <span>{{ $product->pivot->count }} шт</span></p>
              </div>
            </li>
          @endforeach
        </ul>

        <div class="basket__order-confirm">
          <h3 class="basket__order-total">До сплати: <span>{{$order->getCalculateOrderPrice()}} ₴</span></h3>

          <button type="button" class="basket__btn-confirm js-checkout-btn">Перейти до оформлення замовлення</button>
          <div class="basket__checkout-overlay js-overlay">
            <div class="basket__checkout-modal js-checkout-modal">
              <button type="button" class="basket__btn--closeCheckout js-close-checkout">
                <span class="basket__checkout--close"></span>
              </button>
              <h2 class="basket__checkout--title">Ваше замовлення</h2>
  
              <ul class="basket__checkout-list js-checkout-list">
                @foreach($order->products as $product)
                <li class="basket__checkout-item">
                  <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="basket__img-link-checkout">
                    <img src="/images/{{$product->image}}.jpg" class="basket__product-img-checkout" alt="product">
                  </a>
                  <div class="basket__checkout-info">
                    <h3 class="basket__product-name-checkout">{{$product->name}}</h3>
                    <p class="basket__order-count-checkout">Загальна кількість товару: <span>{{ $product->pivot->count }} шт</span></p>
                    <p class="basket__product-price">Ціна: <span class="basket__product-oldPrice">{{$product->getOldPrice()}}₴</span> <span class="basket__product-currentPrice">{{$product->price}}₴</span></p>
                    <p class="basket__product-totalCost">Вартість замовлення: <span>{{$product->getProductPriceForCount()}}₴</p>
                  </div>
                </li>
                @endforeach
              </ul>
              
              <h3 class="basket__delivery-title">Отримувач</h3>
              <form method="POST" id="orderForm" class="basket__delivery-form" action="{{route('processOrder')}}">
                <ul class="basket__delivery-list">
                  <li class="basket__delivery-item">
                    <label for="lastName">Прізвище</label>
                    <input id="lastName" type="text" class="basket__input-lastName input__lastName--error" name="lastName" placeholder="Прізвище">
                  </li>
                  <li class="basket__delivery-item">
                    <label for="firstName">Ім'я</label>
                    <input id="firstName" type="text" class="basket__input-firstName input__firstName--error" name="firstName" placeholder="Ім'я">
                  </li>
                  <li class="basket__delivery-item">
                    <label for="phoneNumber">Мобільний телефон</label>
                    <input id="phoneNumber" type="number" class="basket__input-phoneNumber input__phoneNumber--error" name="phoneNumber" placeholder="+38-000-888-777">
                  </li>
                  <li class="basket__delivery-item">
                    <label for="email">Електрона пошта</label>
                    <input id="email" type="email" class="basket__input-email input__email--error" name="email" placeholder="Електрона пошта">
                  </li>
                </ul>

                <button class="basket__submit-checkout" type="submit">Оформити замовлення</button>
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="/" class="basket__home-link">Повернутися в магазин</a>
  </div>
</section>
@endsection