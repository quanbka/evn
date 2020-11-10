@extends('frontend.layouts.master')
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
                       <img src="{{ $blog->image?$blog->image:'http://via.placeholder.com/1200x1200'}}">
                       {{-- <img src="http://via.placeholder.com/1200x1200">
                       <img src="http://via.placeholder.com/1200x1200">
                       <img src="http://via.placeholder.com/1200x1200">
                       <img src="http://via.placeholder.com/1200x1200">
                       <img src="http://via.placeholder.com/1200x1200">
                       <img src="http://via.placeholder.com/1200x1200">
                        <img src="http://via.placeholder.com/1200x1200">
                        <img src="http://via.placeholder.com/1200x1200"> --}}


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-info">
                        <?php
                            function formatNumber($number){
                                return number_format($number,0,",",".");
                            }
                        ?>
                        <h1>{{ $blog->name }}</h1>

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
                            @if( isset($blog) && ($blog))
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            @endif
                            {{ csrf_field() }}
                        </form>



                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="blog-description">
                {!! $blog->content !!}
            </div>
        </div>
    </div>

@endsection

@section('script')
    <link  href="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
@endsection
