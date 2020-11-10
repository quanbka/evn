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
                    <th class="col-md-1">ID</th>
                    <th class="col-md-2">Tên danh mục</th>


                </tr>

                <style media="screen">
                    .preview-img{
                        max-width: 32px;
                        max-height: 32px;
                    }

                </style>
                <tr ng-repeat='item in categories'>
                    <td ng-bind="item.id"></td>
                    <td><a ng-href="/danh-muc/@{{item.slug}}_@{{item.id}}.html" ng-bind="item.name" target="_blank"></a></td>


                </tr>
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
