@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                @if(count($products) > 0)
                <div class="content-main col-md-12">
                    <div class="">
                        {{ $products->render() }}
                        @include('frontend.shop.order-by-form')

                    </div>
                    <div class="clearfix"></div>
                    @include('frontend.shop.product-grid', ['columns' => 3])
                </div>
                @else
                    <div class="content-main col-md-12">
                        <p>Danh mục này hiện không có sản phẩm nào.</p>
                    </div>
                @endif
                @include('frontend.layouts.sidebar')

            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
