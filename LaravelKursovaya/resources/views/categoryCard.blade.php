<li class="category__item">
    <img src="/images/{{$product->image}}.jpg" alt="product__img" class="category__product-img">
    <div class="category__product category__product-info">
        <h3 class="category__product-name">{{$product->name}}</h3>
        <p class="category__product-descr">{{$product->description}}</p>
        <p class="category__product-price">Ціна: <span class="category__product-oldPrice">{{$product->getOldPrice()}}₴</span> <span class="category__product-newPrice">{{$product->price}}₴</span></p>
        <div class="category__buttons">
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <a role="button" class="category__details-link" href="{{ route('product', [$product->category->code, $product->code]) }}">Детальніше</a>
                <button type="submit" role="button" class="category__basket-btn">Купити</button>
                @csrf
            </form>
        </div>
    </div>
</li>