<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng hóa đơn
                <div class="card-action p-2 bg-light border border-2 border-light rounded d-block">
                    <div class="dropdown">
                        <a href="?act=hoadon&trangthai=1" >Đã duyệt
                        </a>
                    </div>
                </div>
                <div class="card-action p-2 bg-light border border-2 border-light rounded mr-2">
                    <div class="dropdown">
                        <a href="?act=hoadon&trangthai=0" >Chưa xét duyệt
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Tên khách hàng</th>
                            <th>Ngày đặt</th>
                            <th>Tổng tiền</th>
                            <!-- <th>Địa chỉ</th> -->
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <?php foreach ($data as $value) { ?>
                                    <td><?= $value['nguoinhan'] ?></td>
                                    <td><?= $value['Ngaytao'] ?></td>
                                    <td><?= number_format($value['tongtien'], 0, ',', '.') ?></td>
                                    <!-- <td><p><?= $value['diachi'] ?></p></td> -->
                                    <td><?= $value['sodienthoai'] ?></td>
                                    <?php if($value['trangthai'] == 1) $trangthai = "Đã xét duyệt";else $trangthai = "Chưa xét duyệt"?>
                                    <td><?=$trangthai?></td>                                
                                    <td class="d-block">
                                        <?php if($value['trangthai'] == 0){?>
                                        <form action="?act=hoadon&sub=browser" method="post">
                                            <button type="submit" class="d-block mt-3 bg-primary border border-5 border-dark rounded" value="<?=$value['MaHD']?>" name="browser">Duyệt</button>
                                        </form>
                                        <?php }?>
                                    <form action="?act=hoadon&sub=detail" method="post">
                                        <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?=$value['MaHD']?>" name="detail">Xem chi tiết</button>
                                    </form>
                                    <form action="?act=hoadon&sub=delete" method="post">
                                        <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?=$value['MaHD']?>" name="delete">Xóa</button>
                                    </form>
                            </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>