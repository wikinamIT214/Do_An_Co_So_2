<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng chi tiết phụ kiện
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=chitietphukien&sub=add" >
                            Thêm chi tiết phụ kiện
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Mã phụ kiên</th>
                            <th>Tên phụ kiện</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <?php foreach ($data as $value) { ?>
                                    <td><?= $value['idpk'] ?></td>
                                    <td><?= $value['tenpk'] ?></td>
                                    <td><?= number_format($value['gia'],0,',','.') ?></td>
                                    <td><img src="../public/img/phukien/<?=$value['hinhanh']?>" alt="" width="100px"></td>
                                    <td class="d-block">
                                    <form action="?act=chitietphukien&sub=delete&condition=idpk" method="post">
                                        <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?=$value['idpk']?>" name="delete">Xóa phụ kiện</button>
                                    </form>
                                    <form action="?act=chitietphukien&sub=edit&condition=idpk" method="post">
                                        <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?=$value['idpk']?>" name="edit">Sửa phụ kiện</button>
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