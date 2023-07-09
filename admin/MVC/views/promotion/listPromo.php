<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng hóa đơn
                <div class="card-action p-2 bg-light border border-2 border-light rounded d-block">
                    <div class="dropdown">
                        <a href="?act=khuyenmai&sub=add" >Thêm khuyến mãi
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Mã khuyến mãi</th>
                            <th>Tên khuyến mãi</th>
                            <th>Loại khuyến mãi</th>
                            <th>Giá trị khuyến mãi</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <?php foreach ($data as $value) { ?>
                                    <td><?= $value['maKM'] ?></td>
                                    <td><?= $value['tenKM'] ?></td>
                                    <td><?= $value['loaiKM'] ?></td>
                                    <td><?=$value['giatriKM']?></td>                                
                                    <td class="d-block">
                                        <form action="?act=khuyenmai&sub=edit" method="post">
                                            <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?=$value['stt']?>" name="edit">Sửa</button>
                                        </form>
                                        <form action="?act=khuyenmai&sub=delete" method="post">
                                            <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?=$value['stt']?>" name="delete">Xóa</button>
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