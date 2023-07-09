<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng chi tiết banner
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=banner&sub=add">
                           Thêm banner
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Mã banner</th>
                            <th>Hình ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <!-- <td><?= $value['khoangGia'] ?></td> -->
                                <td><img src="../public/img/home/<?=$value['hinhanh']?>" alt="" width="200px"></td>
                                <td><?=$value['tieu_de']?></td>
                                <td>
                                <form action="?act=banner&sub=delete&condition=id" method="post">
                                    <input type="hidden" name="condition" value="id">
                                    <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?= $value['id'] ?>" name="delete">Xóa banner</button>
                                </form>
                                <form action="?act=banner&sub=edit&condition=id" method="post">
                                    <input type="hidden" name="condition" value="id">
                                    <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?= $value['id'] ?>" name="edit">Sửa banner</button>
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