<a href="{{ $product->url() }}">
<div class="product-box">
        <div class="product-image">
            <img class="img-responsive" src="{{ $product->image?$product->image:"http://via.placeholder.com/1200x1200" }}" alt="{{ $product->name }}">
        </div>
        <div class="product-info">
            <h3 class="product-title">{{ $product->name }}</h3>
            <p class="text-center">

                <span class="price">{{ number_format($product->price) }} đ</span>
                @if ($product->old_price)
                    <span class="old-price">{{ number_format($product->old_price) }} đ</span>
                @endif

            </p>


        </div>
    </div>
</a>
