<style media="screen">
    select.form-control{
        border-radius: 0 !important;
        -webkit-appearance: none;
    }
    td {
        max-width: 200px;
        word-wrap: break-word;
    }
</style>
<div class="box box-solid">
    <div class="box-body table-responsive">

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
                <?php foreach ($pages as $key => $value): ?>
                  <tr>
                    <td>{{$value->id}}</td>
                    <td><a href="/san-pham/{{$value->slug}}" target="_blank">{{$value->name}}</a></td>
                    <td>{{$value->slug}}</td>
                    <td>{{$value->slug}}</td>
                    <td><a href="/system/product/{{$value->id}}">Sửa</a></td>
                    <td>
                        <form  action="/system/product/{{$value->id}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete" />

                            <button type="submit" name="button">Xóa</button>
                        </form>
                    </td>
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
