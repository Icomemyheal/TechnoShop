@extends('master')

@section('title', 'Techno Shop: Головна')

@section('content')
        <header class="bg-dark py-5" style="background: url('/images/ZsagUE.webp');">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" style="color">Інтернет магазин - TechnoShop: <br>Усе, що Вам необхідне саме тут</h1>
                    <p class="lead fw-normal text-white-100 mb-0">Наш інтернет магазин комп'ютерних комплектуючих - це місце, де ви знайдете все необхідне для свого комп'ютера.<br> У нашому асортименті великий вибір процесорів, материнських плат, відеокарт, оперативної пам'яті, жорстких дисків, SSD-накопичувачів та багато іншого.</p>
                </div>
            </div>
        </header>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($products as $product)
                    @include('card', compact('product'))
                @endforeach
                </div>
            </div>
        </section>
@endsection