@extends('system.layouts.main')
@section('css')
<link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
@endsection
@section('script')
@endsection
@section('content')


<section class="content" >
  <div class="box box-primary">

            <!-- /.box-header -->
            <!-- form start -->
            <?php
              $fields = [
                [
                  'field' => 'id',
                  'editable' => false,
                  'label' => "ID",
                  'type' => 'text'
                ],
                [
                  'field' => 'page',
                  'editable' => false,
                  'label' => "Trang",
                  'type' => 'text'
                ],
                [
                  'field' => 'key',
                  'editable' => false,
                  'label' => "Key",
                  'type' => 'text'
                ],
                [
                  'field' => 'value',
                  'editable' => true,
                  'label' => "Gía trị",
                  'type' => 'textarea'
                ],
              ];
            ?>
            <form role="form" action="/system/config/{{$config->id}}" method="POST">
                {{ method_field('PATCH') }}

                {{ csrf_field() }}
                <div class="box-body">
                  <?php foreach ($fields as $key => $value): ?>
                      <div class="form-group">
                        <label>{{ $value['label'] }}</label>
                        <?php if ($value['type'] == 'text'): ?>
                          <input type="text" class="form-control" name="{{ $value['field'] }}" placeholder="Nhập {{ $value['label'] }}" {{ $value['editable'] ? '' : 'disabled'}} value="{{$config[$value['field']]}}">
                        <?php endif; ?>
                        <?php if ($value['type'] == 'textarea'): ?>
                          <textarea type="text" class="form-control" name="{{ $value['field'] }}" placeholder="Nhập {{ $value['label'] }}" {{ $value['editable'] ? '' : 'disabled'}} >{{$config[$value['field']]}}</textarea>
                        <?php endif; ?>
                      </div>
                  <?php endforeach; ?>


                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="/system/index">Thoát</a>
              </div>
            </form>
          </div>
</section>

@endsection
@section('footer-script')

@endsection
