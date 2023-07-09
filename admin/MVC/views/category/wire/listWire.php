<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng chi tiết loại dây
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=loaiday&sub=add">
                           Thêm loại dây
                        </a>
                    </div>
                </div>
            </div>
            <a href="?act=thuonghieu&sub=add"></a>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Mã loại dây</th>
                            <th>Tên loại dây</th>
                            <th>Hình ảnh</th>
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?= $value['idLD'] ?></td>
                                <td><?= $value['tenLD'] ?></td>
                                <td><img src="../public/img/<?=$value['hinhanh']?>" class="product-img" alt="product img" style="height: 100px;"></td>
                                <td>
                                <!-- <form action="?act=loaiday&sub=detail&condition=idLD" method="post">
                                    <input type="hidden" name="condition" value="idLD">
                                    <button type="submit" class="d-block mt-3 bg-primary border border-5 border-dark rounded" value="<?= $value['idLD'] ?>" name="detail">Xem chi tiết</button>
                                </form> -->
                                <form action="?act=loaiday&sub=delete&condition=idLD" method="post">
                                    <input type="hidden" name="condition" value="idLD">
                                    <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?= $value['idLD'] ?>" name="delete">Xóa loại dây</button>
                                </form>
                                <form action="?act=loaiday&sub=edit&condition=idLD" method="post">
                                    <input type="hidden" name="condition" value="idLD">
                                    <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?= $value['idLD'] ?>" name="edit">Sửa loại dây</button>
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