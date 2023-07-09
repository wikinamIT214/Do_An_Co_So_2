<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng người dùng
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=khoanggia&sub=add">
                           <!-- Thêm khoảng giá -->
                        </a>
                    </div>
                </div>
            </div>
            <a href="?act=takhoan&sub=add"></a>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Tên người dùng</th>
                            <td>Giới tính</td>
                            <th>Địa chỉ email</th>
                            <th>Số điện thoại</th>
                            <th>Chức vụ</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value) { ?>
                            <tr>
                                <td><?= $value['tendangnhap'] ?></td>
                                <td>Nam</td>
                                <td><?= $value['diachiemail'] ?></td>
                                <td><?=$value['sdt']?></td>
                                <td><?php if($value['Ma_quyen'] == 1) echo "Quản trị viên";else echo "Khách hàng";?></td>
                                <td>
                                <!-- <form action="?act=nguoidung&sub=detail" method="post">
                                        <button type="submit" class="d-block mt-3 bg-primary border border-5 border-dark rounded" value="<?=$value['maDD']?>" name="detail">Xem chi tiết</button>
                                </form> -->
                                <form action="?act=nguoidung&sub=delete&condition=maDD" method="post">
                                    <input type="hidden" name="condition" value="idKG">
                                    <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?= $value['maDD'] ?>" name="delete">Xóa </button>
                                </form>
                                <form action="?act=nguoidung&sub=edit&condition=idKG" method="post">
                                    <input type="hidden" name="condition" value="idKG">
                                    <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?= $value['maDD'] ?>" name="edit">Sửa</button>
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