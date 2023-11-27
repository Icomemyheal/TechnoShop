<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Tehcno Shop, Інтернет-магазин, Интернет-магазин, Комплектующие" />
        <meta name="author" content="Timur Derelyk, Тимур Дерелюк" />
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="/css/normalize.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation-->
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__top">
                        <a href="{{ route('index') }}" class="header__logo--link header__logo">
                            Techno<span>Shop</span>
                        </a>
        
                        <button type="button" class="header__btn--menu js-header__btn--menu">
                            <span class="header__menu--burger"></span>
                        </button>
        
                        <div class="header__menu js-header__menu">
                            <div class="header__menu--container">
                                <nav class="header__nav--menu">
                                    <ul class="header__nav--list">
                                        <li class="header__nav--item active"><a href="{{route('index')}}" class="header__nav--link">Головна</a></li>
                                        <li class="header__nav--item"><a href="{{route('categories')}}" class="header__nav--link">Категорії</a></li>
                                        <li class="header__nav--item"><a href="/admin" class="header__nav--link">Адмін-панель</a></li>
                                        <li class="header__nav--item"><a href="{{ route('basket') }}" class="header__nav--link">Корзина</a></li>
                                    </ul>
                                </nav>
        
                                <ul class="header__menu--contacts">
                                    <li class="header__menu--contacts-item">
                                        <svg class="smartphone">
                                            <use xlink:href="./images/Sprite.svg#icon-smartphone"></use>
                                        </svg>
                                        <a href="tel:+38 50 873 56 72" class="header__menu--tel">+38 50 873 56 72</a>
                                    </li>
                                    <li class="header__menu--contacts-item">
                                        <svg class="envelope">
                                            <use xlink:href="./images/Sprite.svg#icon-envelope"></use>
                                        </svg>
                                        <a href="mailto:derelyk2004@gmail.com" class="header__menu--email">derelyk2004@gmail.com</a>
                                    </li>
                                </ul>
        
                                <div class="header__menu--socials">
                                    <ul class="header__socials--list">
                                        <li class="header__socials--item"><a href="https://www.instagram.com/shinrodt/" class="header__socials--link">Instagram</a></li>
                                        <li class="header__socials--item"><a href="https://github.com/Icomemyheal" class="header__socials--link">Github</a></li>
                                        <li class="header__socials--item"><a href="https://www.facebook.com/profile.php?id=100024421591790" class="header__socials--link item-line">Facebook</a></li>
                                        <li class="header__socials--item"><a href="https://t.me/Icomemyheal" class="header__socials--link">Telegram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <a href="{{ route('index') }}" class="footer__logo footer__logo-link">
                        Techno<span>Shop</span>
                    </a>

                    <ul class="footer__nav--list">
                        <li class="footer__nav--item"><a href="#" class="footer__nav--link">Головна</a></li>
                        <li class="footer__nav--item"><a href="#" class="footer__nav--link">Категорії</a></li>
                        <li class="footer__nav--item"><a href="/admin" class="footer__nav--link">Адмін-панель</a></li>
                    </ul>

                    <address>
                        <ul class="footer__address-list">
                            <li class="footer__address-item">Вул. Стрілецька 56а, 2 поверх</li>
                            <li class="footer__address-item"><a href="tel:+380 50 873 56 72" class="footer__address-link">Телефон:<span> +380 50 873 56 72</span></a></li>
                            <li class="footer__address-item">пн-пт: <span>8:30 - 20:00</span></li>
                        </ul>
                    </address>
                    <div class="footer__wrapper">
                        <button class="footer__tell-btn">Замовити дзвінок</button>
                    
                    <ul class="footer__social--list">
                        <li class="footer__social--item">
                            <a href="https://www.instagram.com/shinrodt/" target="_blank" class="footer__social--link">
                                <svg>
                                    <use xlink:href="/images/Sprite.svg#icon-instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__social--item">
                            <a href="https://www.facebook.com/profile.php?id=100024421591790" target="_blank" class="footer__social--link">
                                <svg>
                                    <use xlink:href="/images/Sprite.svg#icon-facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__social--item">
                            <a href="https://t.me/Icomemyheal" target="_blank" class="footer__social--link">
                                <svg>
                                    <use xlink:href="/images/Sprite.svg#icon-send"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="footer__social--item">
                            <a href="https://github.com/Icomemyheal" target="_blank" class="footer__social--link">
                                <svg>
                                    <use xlink:href="/images/Sprite.svg#icon-github"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="/js/scripts.js"></script>
    </body>
</html>