@extends('system.layouts.main')
@section('css')
<link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
<script src="/sys/js/controller/user-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
@endsection
@section('content')
<section class="content-header">
  <h1>
    Manage User
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Manage User</li>
  </ol>
</section>

<section class="content" ng-controller="UserController">
    {{-- @include('system.user.filter') --}}
    @include('system.user.list')
    @include('system.user.modal')
</section>

@endsection
@section('footer-script')
    <script src="/system/js/script/bootstrap-datepicker.js" charset="utf-8"></script>
    <script type="text/javascript">
        //Date picker
        $('.datepicker').datepicker({
          autoclose: true
        })
    </script>
@endsection
