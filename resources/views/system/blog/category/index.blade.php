@extends('system.layouts.main')
@section('css')
<link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
<script src="/sys/js/controller/blog-category-controller.js?v={{ config('app.version') }}" charset="utf-8"></script> 
@endsection
@section('content')
<section class="content-header">
  <h1>
    Quản lý đối tác
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Quản lý danh mục</li>
  </ol>
</section>

<section class="content" ng-controller="CategoryController">
    @include('system.blog.category.list')
    @include('system.blog.category.modal')
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
