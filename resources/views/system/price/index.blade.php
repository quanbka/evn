@extends('system.layouts.main')
@section('css')
<link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
<script src="/sys/js/controller/index-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
@endsection
@section('content')


<section class="content" ng-controller="IndexController">
    @include('system.price.list')
</section>

@endsection
@section('footer-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        //Date picker
        $('.datepicker').datepicker({
          autoclose: true
        })
    </script>
@endsection