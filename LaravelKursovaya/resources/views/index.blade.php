@extends('master')

@section('title', 'Techno Shop: Головна')

@section('content')
        <section class="hero">
            <div class="container">
                <div class="hero__inner">
                    <h1 class="hero__h1">Інтернет магазин - <span>Techno</span><span>Shop</span> Усе, що Вам необхідне саме тут</h1>
                    <p class="hero__p">Наш інтернет магазин комп'ютерних комплектуючих - це місце, де ви знайдете все необхідне для свого комп'ютера.У нашому асортименті великий вибір процесорів, материнських плат, відеокарт, оперативної пам'яті, жорстких дисків, SSD-накопичувачів та багато іншого.</p>
                </div>
            </div>
        </section>
        <section class="filters">
            <div class="container">
                <div class="filters__inner">
                    <h2 class="filters__title">Фільтри</h2>
                    <ul class="filters__card-list">
                        @foreach ($categories as $category)
                            <li class="filters__card-item js-filter-btn" data-filter_type="{{$category->code}}">
                                <img src="/images/{{ $category->image }}.png" alt="filters__img" class="filters__card-img">
                                <h3 class="filters__name">{{$category->name}}</h3>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        <div class="line"></div>
        </section>
        <section class="products">
            <div class="container">
                <h2 class="products__title">Товари</h2>
                <ul class="products__list">
                    @foreach ($products as $product)
                        @include('card', compact('product'))
                    @endforeach
                </ul>
            </div>
        </section>
        <section class="advantages">
            <div class="container">
                <div class="advantages__inner">
                    <h2 class="advantages__title">Наші переваги</h2>
                    <ul class="advantages__list">
                        <li class="advantages__item">
                            <svg class="icon-goods">
                                <use xlink:href="/images/Sprite.svg#icon-goods"></use>
                            </svg>
                            <p>Широкий асортимент товарів, включаючи процесори, відеокарти, материнські плати, оперативну пам'ять та багато іншого.</p>
                        </li>
                        <li class="advantages__item">
                            <svg class="icon-customer">
                                <use xlink:href="/images/Sprite.svg#icon-customer"></use>
                            </svg>
                            <p>Компетентні фахівці, готові надати консультації та допомогу у виборі оптимального обладнання.</p>
                        </li>
                        <li class="advantages__item">
                            <svg class="icon-deliver">
                                <use xlink:href="/images/Sprite.svg#icon-deliver"></use>
                            </svg>
                            <p>Швидка доставка і гнучка система оплати.</p>
                        </li>
                        <li class="advantages__item">
                            <svg class="icon-guarantee">
                                <use xlink:href="/images/Sprite.svg#icon-guarantee"></use>
                            </svg>
                            <p>Гарантія на всю продукцію і послуги від TechnoShop</p></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="aboutUs">
            <div class="container">
                <div class="aboutUs__inner">
                    <h2 class="aboutUs__title">Про нас</h2>
                    <div class="aboutUs__content">
                        <img src="/images/aboutUs__img.png" alt="aboutUs__img" class="aboutUs__img">
                        <div class="aboutUs__text">
                            <p class="aboutUs__p">Інтернет магазин <span>TechnoShop</span> — ваш надійний партнер у світі комп'ютерних технологій!</p>
                            <p class="aboutUs__p">Ми - команда фахівців, яка діє на ринку комп'ютерних комплектуючих вже протягом багатьох років. За цей час ми зарекомендували себе як надійний постачальник високоякісних комплектуючих для комп'ютерів та ноутбуків.</p>
                            <p class="aboutUs__p">Наша місія - забезпечити клієнтів найкращими рішеннями для їхніх потреб у сфері ІТ. Ми розуміємо, наскільки важливо мати доступ до надійних та швидких комплектуючих для збільшення продуктивності вашого комп'ютера. Тому ми пропонуємо широкий вибір продукції від провідних виробників світу, таких як Intel, AMD, NVIDIA, ASUS, MSI, та багатьох інших.</p>
                            <p class="aboutUs__p">Ми розуміємо, що кожен клієнт має свої унікальні потреби, тому пропонуємо індивідуальний підхід до кожного з вас. Незалежно від того, чи ви геймер, професіонал в галузі відеомонтажу, або просто шукаєте оновлення для вашого дому чи офісу - ми завжди готові вас підтримати.</p>
                            <span>Довіряйте своїй технологічній інфраструктурі професіоналам. Обирайте "TechnoShop" і покращуйте свій досвід в галузі ІТ разом з нами!</span>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
@endsection