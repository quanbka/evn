@extends('system.layouts.main')
@section('css')
<link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
<script src="/sys/js/controller/index-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
@endsection
@section('content')
<section class="content-header">
  <h1>
    Quản lý sản phẩm
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Quản lý danh mục</li>
  </ol>
</section>

<section class="content" ng-controller="IndexController">
    <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tạo page mới</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/system/product">
        {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nhập tên sản phẩm cần tạo</label>
          <input type="text" name="name" class="form-control" ng-model="slug">
        </div>
        <button type="submit" class="btn btn-primary">Tạo</button>
      </div>
    </form>
  </div>
    @include('system.product.list')
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
