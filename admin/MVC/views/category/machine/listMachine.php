<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng chi tiết loại máy
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=loaimay&sub=add">
                           Thêm loại máy
                        </a>
                    </div>
                </div>
            </div>
            <a href="?act=thuonghieu&sub=add"></a>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Mã loại máy</th>
                            <th>Tên loại máy</th>
                            <th>Hình ảnh</th>
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?= $value['idLM'] ?></td>
                                <td><?= $value['tenLM'] ?></td>
                                <td><img src="../public/img/<?=$value['hinhanh']?>" class="product-img" alt="product img" style="height: 100px;"></td>
                                <td>
                                <!-- <form action="?act=loaiday&sub=detail&condition=idLD" method="post">
                                    <input type="hidden" name="condition" value="idLD">
                                    <button type="submit" class="d-block mt-3 bg-primary border border-5 border-dark rounded" value="<?= $value['idLD'] ?>" name="detail">Xem chi tiết</button>
                                </form> -->
                                <form action="?act=loaimay&sub=delete&condition=idLM" method="post">
                                    <input type="hidden" name="condition" value="idLM">
                                    <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?= $value['idLM'] ?>" name="delete">Xóa loại máy</button>
                                </form>
                                <form action="?act=loaimay&sub=edit&condition=idLM" method="post">
                                    <input type="hidden" name="condition" value="idLM">
                                    <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?= $value['idLM'] ?>" name="edit">Sửa loại máy</button>
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