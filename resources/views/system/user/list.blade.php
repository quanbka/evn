<div class="box box-solid">
    <div class="box-body">

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-4">Name</th>
                    <th class="col-md-4">Email</th>
                    <th class="col-md-1">Created at</th>
                    <th class="col-md-1">Action</th>
                </tr>
                <tr>
                    <td><input type="text" name="" value="" class="form-control"></td>
                    <td>
                        <input type="text" name="" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="" value="" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="" value="" class="form-control margin-bottom-5 " placeholder="From">
                        <input type="text" name="" value="" class="form-control" placeholder="To">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right datepicker">
                        </div>

                    </td>
                    <td>
                        <button type="button" name="button" class="btn btn-primary btn-flat margin-bottom-5 btn-block">Search</button>
                        <button type="button" name="button" class="btn btn-default btn-flat btn-block">Reset</button>
                    </td>
                </tr>
                <tr ng-repeat="item in users">
                    <td ng-bind="item.id"></td>
                    <td ng-bind="item.name"></td>
                    <td ng-bind="item.email"></td>
                    <td><a href="javascript:void(0)" class="btn btn-primary btn-sm" title="Edit this user" ng-click="showEditUserForm(item)">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-danger btn-sm" title="Remove this user" ng-click="showDeleteUserForm(item)">
                           <i class="fa fa-times"></i>
                       </a>

                    </td>
                </tr>
              </tbody>
          </table>
          <div class="center">
              @include('system.common.pagination', [
                'accessPageId' => 'filter.page',
                'accessPagesCount' => 'pagesCount',
                'accessFind' => 'getUsers()'
                ])
          </div>
    </div>
</div>
