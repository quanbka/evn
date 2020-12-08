<style media="screen">
    .modal-lg{
        width: calc(100% - 100px);
        height: calc(100% - 100px);
        margin: 50 !important;
    }
</style>
<div id="objectForm" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@{{ modes[mode].title }}</h4>
            </div>
            <div class="modal-body">
                <form class="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tên đối tác</label>
                                <div class="">
                                    <input type="text" class="form-control" ng-model="object.name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Sorder</label>
                                <div class="">
                                    <input type="text" class="form-control" ng-model="object.sorder">
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Danh mục</label>
                                <div class="">
                                    <select name="" class="form-control" ng-model="object.category_id" ng-options="item.id as item.name for item in categories | filter:{ name: ''}" ng-change="getBlogs()">
                                        <option value="" disabled>Vui lòng chọn danh mục</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Ảnh</label>
                                <div class="">
                                    <div class="input-group input-group-sm">
                                        <input id="image" type="text" class="form-control" ng-model="object.image">
                                            <span class="input-group-btn">
                                                <a id="lfm" data-input="image" class="btn btn-primary">
                                                  <i class="fa fa-picture-o"></i>
                                                </a>
                                            </span>
                                      </div>
                                </div>
                            </div>
                            <img ng-src="@{{ object.image}}" alt="" class="preview-img form-group">
                            <style media="screen">
                                .preview-img{
                                    max-width: 100%;
                                    max-height: 64px;
                                }
                                .slides{
                                    margin: 0;
                                    padding: 0;
                                }
                                .slides  li {
                                    display: inline;
                                }
                            </style>

                            <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
                            <script>
                            $('#lfm').filemanager('image');
                            </script>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <label for="">Nội dung</label>
                                 <div ckeditor="options" ng-model="object.content" ready="onReady()"></div>
                            </div>
                        </div>
                    </div>





                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" ng-click="createOrUpdate()" id="createUserButton" class="btn btn-success" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">@{{ modes[mode].buttonLabel }}</button>
            </div>
        </div>
    </div>
</div>

<div id="deleteForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete user</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete @{{deleteUser.email}}'s user?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button ng-click="destroyUser()" id="deleteUserButton" class="btn btn-danger" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Delete</button>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
<script src="/sys/js/angular/angular-ckeditor.min.js"></script>
<script>
  var options = {
      language: 'en',
      allowedContent: true,
      entities: false,
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
  };
</script>
