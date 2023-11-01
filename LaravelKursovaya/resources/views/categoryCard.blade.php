<div class="custom-card col">
    <img src="/images/{{$product->image}}.jpg" alt="#" class="custom-card-img" width="256px" height="256px">
    <div class="custom-card-body">
        <div class="custom-card-title">{{$product->name}}</div>
        <p class="card-text">{{$product->description}}</p>
        <p class="card-text">{{$product->price}}₴</p>
        <div class="buttons-container">
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <a role="button" class="btn btn-secondary" href="{{ route('product', [$product->category->code, $product->code]) }}">Детальніше</a>
                <button type="submit" role="button" class="btn btn-primary">В корзину</button>
                @csrf
            </form>
        </div>
    </div>
</div>