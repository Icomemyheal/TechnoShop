<div class="col mb-5">
    <div class="card h-100">

        <img class="card-img-top" src="/images/{{$product->image}}.jpg" alt="i5intelcore" width="450px" height="300px"/>

        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder"> {{$product->name}} </h5>
                Ціна: {{$product->price}}₴
            </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <a role="button" class="btn btn-secondary" href="{{ route('product', [$product->category->code, $product->code]) }}">Детальніше</a>
                <button type="submit" role="button" class="btn btn-primary">В корзину</button>
                @csrf
            </form>
        </div>
    </div>
</div>