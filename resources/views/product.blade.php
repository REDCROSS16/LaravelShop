@extends('master')

@section('title', $product->name)

@section('content')
    <div class="starter-template">
        <h1>{{ $product->name }}</h1>
        <h2>{{ $product->category->name }}</h2>
        <p>Цена: <b>{{ $product->price }} ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="picture">
        <p>{{ $product->description }}</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
            <input type="hidden" name="_token" value="z4Lx2krpAfwbjZZiN2PTrGD6kCEL0QBcfREYkG5s">
        </form>
    </div>
@endsection
