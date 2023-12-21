<!DOCTYPE html>
<html lang="en">
<head>
    <title>Письмо від TechnoShop!</title>
</head>
<body style="padding: 0; font-family:'Roboto'; font-weight:500;">
    <section style="margin: 0 auto; width: 100%; height:100%;">
    <h1 style="font-family:'Lato', sans-serif; color:#1d1d1d; font-weight:700;">{{ $title }}</h1>
    
    <p style="color:#1d1d1d; font-weight:500; font-size:22px;">{{ $body }}</p>

    <h1 style="font-family:'Lato', sans-serif; color:#1d1d1d; font-weight:700;">Отримувач: </h1>
    
        <ul style="list-style: none; padding-left:0px;">
            <li style="font-family:'Lato', sans-serif; color:#1d1d1d; font-weight:700; font-size:22px;">Прізвище: {{ $lastName }}</li>
            <li style="font-family:'Lato', sans-serif; color:#1d1d1d; font-weight:700; font-size:22px;">Ім'я: {{ $firstName }}</li>
            <li style="font-family:'Lato', sans-serif; color:#1d1d1d; font-weight:700; font-size:22px;">Номер телефона: {{ $phoneNumber }}</li>
        </ul>

    <ul style="list-style: none; padding-left:0px;">
        <h1 style="font-family:'Lato', sans-serif; color:#1d1d1d; font-weight:700;">Список товарів в замовленні:</h1>
        @foreach($productsInOrder as $product)
        <li>
            <img src="{{ $message->embed(public_path("images/{$product->image}.jpg")) }}" style="object-fit:cover; max-height:400px;" alt="product">

            <div>
              <h3 style="font-family:'Lato', sans-serif; color:#1d1d1d; font-weight:700;">{{$product->name}}</h3>
              <p style="font-weight:500;">Загальна кількість товару: <span style="color:#3e77aa;">{{ $product->pivot->count }} шт</span></p>
              <p style="font-weight:500;">Стара ціна: <span style="color:#c4c7c9;">{{$product->getOldPrice()}}₴</span> <span style="font-weight:500;">Ціна зі знижкою: <span style="color:#1ec667;">{{$product->price}}₴</span></span></p>
              <p style="font-weight:500;">Вартість замовлення: <span style="color:#067b39;">{{$product->getProductPriceForCount()}}₴</p>
            </div>
          </li>
        @endforeach
    </ul>
    </section>
</body>
</html>