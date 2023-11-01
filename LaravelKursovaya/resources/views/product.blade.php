@extends('master')

@section('title', 'Techno Shop: Товар')

@section('content')
        <div class="container mt-5">
            <div>
                  <div class="card mb-3 card-product-container" style="max-width: 580px;">
                    <div class="row g-0">
                        <h2 class="card-header">{{$product->name}}</h2>
                      <div class="col-md-4">
                        <img src="/images/{{$product->image}}.jpg" class="img-fluid rounded-start" alt="product">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body card-body-product">
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quaerat quidem quam similique Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum non sit aliquid ex molestiae</p>
                          <div class="buttons-container">
                            <a href="/" class="btn btn-primary">На головну</a>
                            <a href="/order/basket" class="btn btn-success">В корзину</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
@endsection