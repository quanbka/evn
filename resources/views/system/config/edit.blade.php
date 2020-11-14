@extends('system.layouts.main')
@section('css')
<link rel="stylesheet" href="/sys/css/bootstrap-datepicker.css">
<style>
    img, svg {
        max-height: 100px;
        max-width: 100px;
    }
</style>
@endsection
@section('script')
@endsection
@section('content')
<section class="content" ng-controller="ConfigController">
    <div class="box box-primary">
        <div class="box-body">
            <div class="form-group" ng-repeat="value in fileds">
                <label>@{{ value.label }}</label>
                <input 
                    ng-if="value.type == 'text'" 
                    type="text" 
                    class="form-control" 
                    name="@{{ value['field'] }}" 
                    placeholder="Nhập @{{ value.label }}" 
                    ng-disabled="!value.editable"
                    ng-model="config[value.field]"
                >
                <textarea 
                    ng-if="value.type == 'textarea' && config.type == 'text'"
                    type="text" class="form-control" 
                    name="@{{ value.field }}" 
                    placeholder="Nhập @{{ value.label }}" 
                    ng-disabled="!value.editable"
                    ng-model="config[value.field]"
                >
                </textarea>
                <div ng-if="value.type == 'textarea' && config.type == 'slide'">
                    <table class="table table-responsive">
                        <tr>
                            <th>Ảnh</th>
                            <th>Đường dẫn ảnh</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Url</th>
                            <th></th>
                        </tr>
                        <tr ng-repeat="item in config[value.field] track by $index">
                            <td>
                                <img ng-if="item.image_url" ngf-select="uploadSlideImage($file, item)" src="@{{ item.image_url }}" alt="">
                                <div ng-if="!item.image_url">
                                    <a ngf-select="uploadSlideImage($file, item)">
                                        @include('system.inc.no-image-svg')
                                    </a>
                                </div>
                            </td>
                            <td>
                                <input class="form-control" id="image-@{{ $index }}" type="text" ng-model="item.image_url">
                            </td>
                            <td>
                                <input class="form-control" type="text" ng-model="item.title">
                            </td>
                            <td>
                                <input class="form-control" type="text" ng-model="item.text">
                            </td>
                            <td>
                                <input class="form-control" type="text" ng-model="item.url">
                            </td>
                            <td class="text-right">
                                <button ng-click="removeSlide($index)" class="btn btn-danger"><i class="fa fa-close"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td class="text-right">
                                <button ng-click="addSlide()" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div ng-if="value.type == 'textarea' && config.type == 'image'">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" ng-model="config.value">
                                <span class="input-group-btn">
                                    <button ngf-select="uploadImage($file)" type="button" class="btn btn-info btn-flat">Chọn Ảnh</button>
                                </span>
                            </div>
                            <br>
                            <img ng-if="config.value" src="@{{ config.value }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button class="btn btn-primary" ng-click="save()">Lưu</button>
            <a href="/system/index">Thoát</a>
        </div>
    </div>
</section>

@endsection
@section('footer-script')
    <script>
        var config = <?= json_encode($config) ?>;
    </script>
    <script src="/sys/js/controller/config-controller.js"></script>
@endsection
