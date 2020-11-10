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
                    <th class="col-md-2">Tên khách hàng</th>
                    <th class="col-md-1">Số điện thoại</th>
                    <th class="col-md-2">Tên sản phẩm</th>
                    <th class="col-md-2">Địa chỉ</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">Đặt hàng lúc</th>
                </tr>
                <style media="screen">
                    .preview-img{
                        max-width: 32px;
                        max-height: 32px;
                    }
                </style>
                <tr ng-repeat='item in orders'>
                    <td ng-bind="item.id"></td>
                    <td ng-bind="item.name"></td>
                    <td ng-bind="item.phone"></td>
                    <td>
                        <a ng-href="/san-pham/@{{products[item.product_id].slug}}_@{{products[item.product_id].id}}.html" ng-bind="products[item.product_id].name" target="_blank"></a>
                    </td>
                    <td ng-bind="item.address"></td>
                    <td ng-bind="item.email"></td>
                    <td ng-bind="item.created_at"></td>
                </tr>
              </tbody>
          </table>
          <div class="margin">
          </div>
          <div class="center">
              @include('system.common.pagination', [
                'accessPageId' => 'page_id',
                'accessPagesCount' => 'pagesCount',
                'accessFind' => 'getOrders()'
                ])
          </div>
    </div>
</div>
