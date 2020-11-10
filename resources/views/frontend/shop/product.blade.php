@extends('frontend.layouts.master')
@section('meta')
    @if (isset($product))
        <meta name="title"         content="{{ $product->meta_title }}" />
        <meta name="description"   content="{{ $product->meta_description }}" />
        <meta property="og:description"   content="{{ $product->meta_description }}" />
        <meta property="og:type"   content="product" />
        <meta property="og:url"    content="{{ $product->url() }}" />
        <meta property="og:title"  content="{{ $product->meta_title }}" />
        <meta property="og:image"  content="{{ $product->image }}" />
        <meta property="og:image:width"  content="600" />
        <meta property="og:image:width"  content="315" />
        <meta property="product:price:amount" content="{{ $product->price }}">
        <meta property="product:price:currency" content="đ">
        <link rel="canonical" href="{{ $product->url() }}">
    @endif
@endsection
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fotorama"
                        data-nav="thumbs"
                        data-thumbwidth="78"
                        data-thumbheight="70"
                        data-allowfullscreen="true">
                       <img src="{{ $product->image?$product->image:'http://via.placeholder.com/1200x1200'}}">
@if ($product->slides && $slides = explode(',', $product->slides))
@foreach ($slides as $slide)
@if($slide != $product->image)
                        <img src="{{$slide}}">
@endif
@endforeach
@endif



                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-info">
                        <?php
                            function formatNumber($number){
                                return number_format($number,0,",",".");
                            }
                        ?>
                        <h1>{{ $product->name }}</h1>
                        <p class="product-info-price">{{ formatNumber($product->price) }} đ
                            @if($product->old_price)
                                <span class="old-price">{{ formatNumber($product->old_price) }} đ</span>
                            @endif

                        </p>

                        <hr>
                        <div class="">
                            {!! $product->description !!}


                        </div>
                        <a href="{{ route('dat-hang', ['id' => $product->id]) }}" type="button" class="btn btn-warning btn-block btn-default product-button" name="button">
                            <span class="product-button-text">Đặt hàng và giao tận nơi</span>
                        </a>
                    </div>
                    <div class="contact-me">
                        <div class="call">
                            Gọi đặt mua : <a href="tel:{{ config('info.hotline') }}">{{ config('info.hotline') }}</a>. (09:30 - 22:00)
                        </div>
                        <div class="chat">
                            <a href="#">Chat với tư vấn viên</a>
                        </div>




                        <form action="{{ route('send-order') }}" method="POST">
                        <div class="call-me">
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="text" name="phone" value="" class="form-control" placeholder="Vui lòng nhập số điện thoại">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-default btn-block">Gọi cho tôi</button>
                                </div>
                            </div>
                            @if( isset($product) && ($product))
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            @endif
                            {{ csrf_field() }}
                        </form>



                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-9">
                    <div class="product-description">
                        {!! $product->content !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Sản phẩm liên quan</h3>
                    <div class="row">
                        <?php
                            if (!isset($columns)) {
                                $columns = 1;
                            }
                        ?>
                            <?php $clearDivIndex = 0 ?>
                            @foreach ($relatedProducts as $key => $relateProduct)
                                <?php
                                    $clearDivIndex++;
                                    $isClearDiv = !($clearDivIndex % $columns);
                                ?>
                                <div class="col-md-{{ 12 / $columns }} product-container">
                                    @include("frontend.shop.item", ['product' => $relateProduct])
                                </div>
                                @if ($isClearDiv)
                                        <div class="clearfix">

                                        </div>
                                @endif
                            @endforeach
                    </div>


                </div>
            </div>





                <!-- 3. Enjoy! -->
        </div>
    </div>

@endsection

@section('script')
    <link  href="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
@endsection
