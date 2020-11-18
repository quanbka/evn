<form action="" method="post">
    {{ csrf_field() }}
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
<button type="submit"  class="btn btn-large btn-primary">Lưu</button>
<br>
<br>
<div class="box box-solid">
    <div class="box-body table-responsive">

        

        <table class="table table-bordered">
            <tbody>
                <tr>
                  <td>ID</td>
                  <td>Công suất</td>
                  <td>Hệ (pha)</td>
                  <td>Mái bằng</td>
                  <td>Mái tôn</td>
                  <td>Mái ngói</td>
                  {{-- <td> </td> --}}


                </tr>

                <style media="screen">
                    .preview-img{
                        max-width: 32px;
                        max-height: 32px;
                    }

                </style>
                <?php foreach ($prices as $key => $value): ?>
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->cong_suat}}</td>
                    <td>{{$value->he}}</td>
                    <td><input type="number" name="{{$value->id}}[mai_bang]" value="{{$value->mai_bang}}"></td>
                    <td><input type="number" name="{{$value->id}}[mai_ton]" value="{{$value->mai_ton}}"></td>
                    <td><input type="number" name="{{$value->id}}[mai_ngoi]" value="{{$value->mai_ngoi}}"></td>
                  </tr>
                <?php endforeach; ?>

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
</form>
