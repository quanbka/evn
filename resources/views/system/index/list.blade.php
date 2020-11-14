<style media="screen">
    select.form-control{
        border-radius: 0 !important;
        -webkit-appearance: none;
    }
</style>
<div class="box box-solid">
    <div class="box-body">

        <table class="table table-bordered">
            <tbody>
                <tr>
                  <td>ID</td>
                  <td>Trang</td>
                  <td>Key</td>
                  <td>Value</td>
                  <td>Loại</td>
                  <td> </td>
                  {{-- <td> </td> --}}


                </tr>

                <style media="screen">
                    .preview-img{
                        max-width: 32px;
                        max-height: 32px;
                    }

                </style>
                <?php foreach ($configs as $key => $value): ?>
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->page}}</td>
                    <td>{{$value->key}}</td>
                    <td>{{$value->value}}</td>
                    <td>{{$value->type}}</td>
                    <td><a href="/system/config/{{$value->id}}">Sửa</a></td>
                    {{-- <td>Xóa</td> --}}
                  </tr>
                <?php endforeach; ?>
                {{-- <tr ng-repeat='item in categories'>
                    <td ng-bind="item.id"></td>
                    <td><a ng-href="/danh-muc/@{{item.slug}}_@{{item.id}}.html" ng-bind="item.name" target="_blank"></a></td>


                </tr> --}}
              </tbody>
          </table>
          <div class="margin">

          </div>
          <div class="center">
              @include('system.common.pagination', [
                'accessPageId' => 'page_id',
                'accessPagesCount' => 'pagesCount',
                'accessFind' => 'getCategories()'
                ])
          </div>
    </div>
</div>
