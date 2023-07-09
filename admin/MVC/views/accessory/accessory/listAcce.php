<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng danh mục phụ kiện
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=phukien&sub=add" >
                            Thêm danh mục phụ kiện
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
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <?php foreach ($data as $value) { ?>
                                    <td><?= $value['idlpk'] ?></td>
                                    <td><?= $value['loaipk'] ?></td>
                                    <td class="d-block">
                                    <form action="?act=phukien&sub=delete&condition=idlpk" method="post">
                                        <button type="submit" class="d-block mt-3 bg-danger border border-5 border-dark rounded" value="<?=$value['idlpk']?>" name="delete">Xóa phụ kiện</button>
                                    </form>
                                    <form action="?act=phukien&sub=edit&condition=idlpk" method="post">
                                        <button type="submit" class="d-block mt-3 bg-success border border-5 border-dark rounded" value="<?=$value['idlpk']?>" name="edit">Sửa phụ kiện</button>
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