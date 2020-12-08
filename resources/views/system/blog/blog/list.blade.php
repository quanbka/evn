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
                    <th class="col-md-2">Tên đối tác</th>
                    <th class="col-md-1">Sorder</th>
                    <th class="col-md-1">Danh mục</th>
                    <th class="col-md-1">Ảnh</th>
                    <th class="col-md-1">
                        <button ng-click="showCreateForm()" type="button" name="button" class="btn btn-flat btn-block btn-success"><i class="fa fa-plus"></i> Thêm </button>
                    </th>
                </tr>
                <tr >
                    <td><input type="text" name="" value="" class="form-control"></td>
                    <td>
                        <input type="text" name="" value="" class="form-control">
                    </td>

                    <td>
                        <input type="text" name="" value="" class="form-control">
                    </td>
                    <td>
                        <select name="" class="form-control" ng-model="filter.category_id" ng-options="item.id as item.name for item in categories | filter:{ name: ''}" ng-change="getBlogs()">
                            <option value="">Toàn bộ danh mục</option>
                        </select>
                    </td>
                    <td></td>
                    <td>
                        <button type="button" ng-click="getBlogs()" name="button" class="btn btn-primary btn-flat margin-bottom-5 btn-block">Search</button>
                        <button type="button" ng-click="reset()" name="button" class="btn btn-default btn-flat btn-block">Reset</button>
                    </td>
                </tr>
                <style media="screen">
                    .preview-img{
                        max-width: 32px;
                        max-height: 32px;
                    }

                </style>
                <tr ng-repeat='item in blogs'>
                    <td ng-bind="item.id"></td>
                    <td><a ng-href="/bai-viet/@{{item.slug}}_@{{item.id}}.html" ng-bind="item.name" target="_blank"></a></td>
                    <td ng-bind="item.sorder"></td>
                    <td ng-bind="categories[item.category_id].name"></td>
                    <td>
                        <img ng-src="@{{item.image}}" alt="" class="preview-img">
                    </td>
                    <td><a href="javascript:void(0)" class="btn btn-primary btn-sm btn-flat" title="Edit this blog" ng-click="showEditForm(item)">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-flat" title="Remove this blog" ng-click="showDeleteForm(item)">
                           <i class="fa fa-times"></i>
                       </a>

                    </td>
                </tr>
              </tbody>
          </table>
          <div class="margin">

          </div>
          <div class="center">
              @include('system.common.pagination', [
                'accessPageId' => 'page_id',
                'accessPagesCount' => 'pagesCount',
                'accessFind' => 'getBlogs()'
                ])
          </div>
    </div>
</div>
