<li class="card js-product-card"  data-card_type="{{$product->category->code}}">
    <div class="card__inner">
        <img src="/images/{{$product->image}}.jpg" alt="product_img" class="card__img">

        <div class="card__body">
            <h3 class="card__name"> {{$product->name}} </h3>
            <span class="card__price">{{$product->price}}₴</span>
        </div>
        <div class="card__footer">
            <form action="{{ route('basket-add', $product) }}" method="POST" class="card__form">
                <a role="button" class="card__details--link" href="{{ route('product', [$product->category->code, $product->code]) }}">Детальніше</a>
                <button type="submit" role="button" class="card__btn">
                    Купити
                </button>
                @csrf
            </form>
        </div>
    </div>
</li>