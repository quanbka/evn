@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        {{ $blogs->render() }}


                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($blogs as $key => $blog)
                                <div class="col-md-3 blog-container">
                                    @include("frontend.blog.item", ['blog' => $blog])
                                </div>
                            @endforeach
                        </div>

                    </div>

                    {{ $blogs->render() }}
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
