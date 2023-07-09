<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng chi tiết hóa đơn
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=product&sub=add" >
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
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><?= $data['Masp']?></td>
                                 <td><?= $data['ten_sp'] ?></td>
                                <td><?= number_format($data['Gia'],0,',','.') ?></td>
                                <td><?= $data['soluong'] ?></td>
                                <td><?=number_format($data['Gia']*$data['soluong'],0,',','.')?></td>
                                <?php if($data['trangthai'] == 1) $trangthai = "Đã xét duyệt";else $trangthai = "Chưa xét duyệt"?>
                                    <td><?=$trangthai?></td>
                            </tr>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>