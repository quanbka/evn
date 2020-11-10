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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Tên sản phẩm</label>
                                <div class="">
                                    <input type="text" class="form-control" ng-model="object.name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Giá</label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="" ng-model="object.price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Giá cũ</label>
                                <div class="">
                                    <input type="text" class="form-control" ng-model="object.old_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Sorder</label>
                                <div class="">
                                    <input type="text" class="form-control" ng-model="object.sorder">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Danh mục</label>
                                <div class="">
                                    <select name="" ng-model="selected" class="form-control" ng-options="item as item.name for item in categories | filter:{ name: ''}" ng-change="changeObjectCategories(item)">
                                        <option value="" disabled>Vui lòng chọn danh mục</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Meta title</label>
                                <div class="">
                                    <input type="text" class="form-control" ng-model="object.meta_title">
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Meta description</label>
                                <div class="">
                                    <textarea class="form-control" ng-model="object.meta_description"></textarea>
                                </div>

                            </div>

                            <div class="">
                                <a href="javascript:void(0)" ng-repeat="(key,category) in object.categories" ng-click="removeCategory(key)" class="badge bg-red">@{{ category.name }}</a> <span> </span>

                            </div>

                            <style media="screen">
                                .preview-img{
                                    max-width: 100%;
                                    max-height: 100px;
                                }
                                .slides{
                                    margin: 0;
                                    padding: 0;
                                }
                                .slides  li {
                                    margin-right: 10px;
                                    margin-bottom: 10px;
                                    display: inline-block;
                                    position: relative;
                                    height: 100px;
                                }
                                i.slide-remove {
                                    position: absolute;
                                    top: 4px;
                                    right: 4px;
                                    color: gray
                                }
                            </style>
                        </div>
                        <div class="col-md-4">
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
                            <div class="form-group">
                                <label for="" class="control-label">Ảnh phụ</label>
                                <ul class="slides" ng-if="typeof($scope.object.slides) !== 'string'" >
                                    <li ng-repeat="(index,slide) in object.slides track by $index" >
                                        <img ng-src="@{{slide}}" alt=""class="preview-img">
                                        <a href="javascript:void(0)" ng-click="removeSlide(index)"><i class="fa fa-remove slide-remove"></i></a>

                                    </li>
                                    <li>
                                        <a class="lfm btn btn-app btn-flat" style="margin: 0; height: 100px; padding: 30px 30px;" data-input="slide" ng-click="addMoreSlide()">
                                            <i class="fa fa-plus"></i> Thêm ảnh
                                          </a>
                                      </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <label for="">Mô tả ngắn</label>
                                 <div ckeditor="options" ng-model="object.description" ready="onReady()"></div>
                            </div>
                        </div>
                    </div>
                    <br>
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
                <button ng-click="delete()" id="deleteUserButton" class="btn btn-danger" data-loading-text="<span class='fa fa-spinner fa-spin'></span> Loading...">Delete</button>
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
  var lfm = function(options, cb) {
  // debugger;
  var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';

  console.log(route_prefix);
  window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
  window.SetUrl = cb;
  }

</script>

<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
$('#lfm').filemanager('image');
</script>

<script type="text/javascript">

</script>
