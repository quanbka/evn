@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="content-main col-md-12">

                        <div class="alert alert-success">
                            <strong>Cảm ơn</strong> quý khách đã gửi thông tin. Chúng tôi sẽ liên hệ trong thời gian sớm nhất.

                        </div>

                </div>
                @include('frontend.layouts.sidebar')
            </div>
        </div>
    </div>
@endsection
@section('script')
    @include('frontend.layouts.slide-script')
@endsection
