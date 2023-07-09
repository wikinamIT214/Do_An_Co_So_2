<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng chi tiết khoảng giá
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=khoanggia&sub=add">
                           Thêm khoảng giá
                        </a>
                    </div>
                </div>
            </div>
            <a href="?act=thuonghieu&sub=add"></a>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Mã khoảng giá</th>
                            <th>Khoảng giá</th>
                            <!-- <th>Hình ảnh</th> -->
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?= $value['idKG'] ?></td>
                                <td><?= $value['khoangGia'] ?></td>
                                <td>
                                <form action="?act=khoanggia&sub=delete&condition=idKG" method="post">
                                    <input type="hidden" name="condition" value="idKG">
                                    <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?= $value['idKG'] ?>" name="delete">Xóa khoảng giá</button>
                                </form>
                                <form action="?act=khoanggia&sub=edit&condition=idKG" method="post">
                                    <input type="hidden" name="condition" value="idKG">
                                    <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?= $value['idKG'] ?>" name="edit">Sửa khoảng giá</button>
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