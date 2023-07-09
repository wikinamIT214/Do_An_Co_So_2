<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">Bảng đặt hàng gần đây
        <div class="card-action">
          <div class="dropdown">
            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush table-borderless">
          <thead>
            <tr>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Hình ảnh</th>
              <th>Số lương</th>
              <th>Giá</th>
              <th>Trạng thái</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach ($data as $value) { ?>
                <td><?=$value['idsp']?></td>
                <td><?=$value['ten_sp']?></td>
                <td><img src="../public/img/product/<?=$value['hinhanh_1']?>" class="product-img" alt="product img" style="height: 80px;"></td>
                <td><?=$value['soluong']?></td>
                <td><?=number_format($value['gia_sp'],0,',','.')?></td>
                <?php if($value['trangthai'] == 1) $trangthai = "Đã xét duyệt";else $trangthai = "Chưa xét duyệt"?>
                <td><?=$trangthai?></td></td>
                  <!-- <div class="progress shadow" style="height: 3px;">
                    <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                  </div> -->
                </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>