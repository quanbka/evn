@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        @if ($exception)
            <h2>{{ $exception->getMessage() }}</h2>
            <div style="height: 50vh; ">
            </div>
        @endif
    </div>


@endsection

@section('script')

@endsection
