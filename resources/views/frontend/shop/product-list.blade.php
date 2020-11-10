@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        {{ $products->render() }}
                        @include('frontend.shop.order-by-form')

                    </div>

                    </div>
                    <div class="clearfix"></div>
                    @include('frontend.shop.product-grid')
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
