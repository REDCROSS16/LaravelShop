<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} рублей</p>
            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64"
                   class="btn btn-default"
                   role="button">Подробнее</a>

                <h4>{{ $product->category->name }}</h4>
                <input type="hidden" name="_token" value="z4Lx2krpAfwbjZZiN2PTrGD6kCEL0QBcfREYkG5s">
            </form>
        </div>
    </div>
</div>
