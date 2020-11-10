@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="content-main col-md-12">

                    @if( isset($product) && ($product))
                        <div class="alert alert-success">
                            Bạn đang cần được tư vấn cho sản phẩm <a href="{{ $product->url() }}" target="_blank"><strong>{{ $product->name }}</strong></a>? Vui lòng nhập thông tin của bạn dưới đây, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul style="padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('send-order') }}" method="POST">
                        <div class="form-group">
                            <label>Số điện thoại *</label>
                            <input type="text" class="form-control" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label>Tên *</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ (không bắt buộc)</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                            <label>Email (không bắt buộc)</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        @if( isset($product) && ($product))
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        @endif
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary btn-block">Gửi</button>
                    </form>
                    <hr>
                </div>
                @include('frontend.layouts.sidebar')
            </div>
        </div>
    </div>
@endsection
@section('script')
    @include('frontend.layouts.slide-script')
@endsection
