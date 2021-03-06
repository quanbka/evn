<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">User</h3>
        <div class="pull-right box-tools">
            <button type="button" class="btn btn-success btn-sm" ng-click="showCreateUserForm()">
                <i class="fa fa-plus"></i>
                Create a new user
            </button>
        </div>
    </div>
            <div class="box-body">

                    <from class="form-horizontal">

                        <div class="col-md-4 col-lg-3">
                            <div class="form-group">
                                <label class="control-label col-md-4">Name </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="" value="" ng-model="filter.name" ng-keyup="$event.keyCode == 13 && getUsers()">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="form-group">
                                <label class="control-label col-md-4">Email </label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="" value=""  ng-model="filter.email" ng-keyup="$event.keyCode == 13 && getUsers()">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="form-group">
                                <label class="control-label col-md-4">Status </label>
                                <div class="col-md-8">
                                    <select ng-model="filter.status"
                                            class="form-control"
                                            ng-options="status.value as status.name for status in statuses"
                                            ng-change="getUsers()">
                                        <option value="">All</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>


                        <div class="col-md-12 text-center">
                            <button type="button" id="searchUserButton" class="btn btn-success search" ng-click="getUsers()" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading..."><i class="fa fa-search"></i> Search</button>
                            <button type="button" class="btn btn-warning btn-reset" ng-click="reset()"><i class="fa fa-times"></i> Reset</button>
                        </div>

                    </form>


            </div>
            <!-- /.box-body -->
          </div>
