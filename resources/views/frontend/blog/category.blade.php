@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                @if(count($blogs) > 0)
                <div class="content-main col-md-12">
                    <div class="">
                        {{ $blogs->render() }}

                    </div>
                    <div class="row">

                            @foreach ($blogs as $key => $blog)
                                <div class="col-md-4 blog-container">
                                    @include("frontend.blog.item", ['blog' => $blog])


                                </div>
                            @endforeach
                    </div>

                    {{ $blogs->render() }}
                </div>
                @else
                    <div class="content-main">
                        <p>Danh mục này hiện không có bài viết nào.</p>
                    </div>
                @endif
                @include('frontend.layouts.sidebar')
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
