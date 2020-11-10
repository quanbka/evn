<div class="form-group" style="float:right; margin: 20px 0;">
    <form class="" action="" method="get">
        <select name='order_by' class="form-control" onchange="parentNode.submit()">
          <option selected disabled>Sắp xếp sản phẩm theo</option>
          <option value="-created_at">Sản phẩm mới nhất</option>
          <option value="created_at">Sản phẩm cũ nhất</option>
          <option value="price">Giá từ thấp đến cao</option>
          <option value="-price">Giá từ cao đến thấp</option>
        </select>
    </form>

</div>
