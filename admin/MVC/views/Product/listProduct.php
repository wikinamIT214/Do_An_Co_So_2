<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng danh sách sản phẩm
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=product&sub=add" >
                            Thêm sản phẩm
                        </a>
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
                            <th>Giá</th>
                            <th>Tính trạng</th>
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <?php foreach ($data as $value) { ?>
                                    <td><?= $value['idsp'] ?></td>
                                    <td><?= $value['ten_sp'] ?></td>
                                    <td><img src="../public/img/product/<?= $value['hinhanh_1'] ?>"  alt="product img" style="height: 80px;"></td>
                                    <td><?= number_format($value['gia_sp'], 0, ',', '.') ?></td>
                                    <td>Trống</td>
                                    <td class="d-block">
                                    <form action="?act=product&sub=detail" method="post">
                                        <button type="submit" class="d-block mt-3 bg-primary border border-5 border-dark rounded" value="<?=$value['idsp']?>" name="detail">Xem chi tiết</button>
                                    </form>
                                    <form action="?act=product&sub=delete" method="post">
                                        <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?=$value['idsp']?>" name="delete">Xóa sản phẩm</button>
                                    </form>
                                    <form action="?act=product&sub=edit" method="post">
                                        <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?=$value['idsp']?>" name="edit">Sửa sản phẩm</button>
                                    </td>
                                    </form>
                            </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>