@extends('system.layouts.main')
@section('css')
<link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
<script src="/sys/js/controller/product-controller.js?v={{ config('app.version') }}" charset="utf-8"></script>
@endsection
@section('content')
<section class="content-header">
  <h1>
    Quản lý sản phẩm
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Import sản phẩm</li>
  </ol>
</section>

<section class="content">
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" value="">
        <input type="submit" name="" value="Import">
        {{ csrf_field() }}
    </form>

</section>

@endsection
@section('footer-script')

@endsection
