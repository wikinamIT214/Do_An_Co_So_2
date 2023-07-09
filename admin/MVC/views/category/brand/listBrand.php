<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng chi tiết thương hiệu
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=thuonghieu&sub=add">
                           Thêm thương hiệu
                        </a>
                    </div>
                </div>
            </div>
            <a href="?act=thuonghieu&sub=add"></a>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Mã thương hiệu</th>
                            <th>Tên thương hiệu</th>
                            <th>Hình ảnh</th>
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?= $value['idTH'] ?></td>
                                <td><?= $value['tenTH'] ?></td>
                                <td><img src="../public/img/<?= $value['hinhanh'] ?>" class="product-img" alt="product img" style="height: 80px;"></td>
                                <td>
                                <form action="?act=thuonghieu&sub=detail&table=thuonghieu" method="post">
                                    <input type="hidden" name="condition" value="idTH">
                                    <button type="submit" class="d-block mt-3 bg-primary border border-5 border-dark rounded" value="<?= $value['idTH'] ?>" name="detail">Xem chi tiết</button>
                                </form>
                                <form action="?act=thuonghieu&sub=delete&condition=idTH" method="post">
                                    <input type="hidden" name="condition" value="idTH">
                                    <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?= $value['idTH'] ?>" name="delete">Xóa thương hiệu</button>
                                </form>
                                <form action="?act=thuonghieu&sub=edit&table=thuonghieu" method="post">
                                    <input type="hidden" name="condition" value="idTH">
                                    <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?= $value['idTH'] ?>" name="edit">Sửa thương hiệu</button>
                                </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>