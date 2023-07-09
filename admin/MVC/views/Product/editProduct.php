<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng sửa sản phẩm
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=product&sub=add">

                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="page-addProduct">
                    <div class="form-wrap px-3 py-4">
                        <div class="main-form pt-3">
                            <form action="?act=product&sub=update" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="idProduct" placeholder="Mã sản phẩm" class="form-control mb-3" value="<?=$data['idsp']?>">
                                <div class="mb-3">
                                    <label for="">Chọn thương hiệu</label>
                                    <select name="codeBrand" id="" class="form-control">
                                        <?php foreach ($dataBrand as $value) { ?>
                                            <option value="<?= $value['idTH'] ?>">Thương hiệu <?= $value['tenTH'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Chọn loại máy</label>
                                    <select name="codeMachine" id="" class="form-control">
                                        <?php foreach ($dataMachine as $value) { ?>
                                            <option value="<?= $value['idLM'] ?>">Máy <?= $value['tenLM'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Chọn loại dây</label>
                                    <select name="codeWire" id="" class="form-control">
                                        <?php foreach ($dataWire as $value) { ?>
                                            <option value="<?= $value['tenLD'] ?>"><?= $value['tenLD'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Chọn giới tính</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="<? ?>">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                               <div class="mb-3">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" name="nameProduct" id="" value="<?= $data['ten_sp'] ?>" placeholder="Tên sản phẩm" class="form-control mb-3">
                               </div>
                               <div class="mb-3">
                                <label for="">Giá sản phẩm</label>
                                <input type="text" name="priceProduct" id="" placeholder="Giá sản phẩm" class="form-control mb-3" value="<?= $data['gia_sp'] ?>">
                               </div>
                                <div class="img1">
                                    <img src="../public/img/product/<?= $data['hinhanh_1'] ?>" alt="" width="180px">
                                </div>
                                <input type="file" name="img1Product" id="" placeholder="Hình ảnh 1" class="form-control mb-3">
                                <input type="hidden" name="img1-Product" id=""  value="<?=$data['hinhanh_1']?>">
                                <div class="img2">
                                    <img src="../public/img/product/<?= $data['hinhanh_2'] ?>" alt="" width="180px">
                                </div>
                                <input type="file" name="img2Product" id="" placeholder="Hình ảnh 2" class="form-control mb-3">
                                <input type="hidden" name="img2-Product" id=""  value="<?=$data['hinhanh_2']?>">
                                <div class="img3">
                                    <img src="../public/img/product/<?= $data['hinhanh_3'] ?>" alt="" width="180px" >
                                </div>
                                <input type="file" name="img3Product" id="" placeholder="Hình ảnh 3" class="form-control mb-3">
                                <input type="hidden" name="img3-Product" id=""  value="<?=$data['hinhanh_3']?>">
                               <div class="mb-3">
                                    <label for="">Mô tả sản phẩm</label>
                                    <input type="text" name="describeProduct" id="" placeholder="Mô tả sản phẩm" class="form-control mb-3">
                               </div>
                               <div class="mb-3">
                                    <label for="">Size mặt</label>
                                    <input type="text" name="sizeProduct" id="" placeholder="Size mặt" class="form-control mb-3" value="<?= $data['sizemat'] ?>">
                               </div>
                               <div class="mb-3">
                                    <label for="">Mặt kính</label>
                                    <input type="text" name="glass-surface" id="" placeholder="Mặt kính" class="form-control mb-3" value="<?= $data['matkinh'] ?>">
                               </div>
                                <div class="mb-3">
                                    <label for="">Nguốn gốc</label>
                                    <input type="text" name="sourceProduct" id="" placeholder="Nguồn gốc sản phẩm" class="form-control mb-3" value="<?= $data['nguon_goc'] ?>">
                                </div>
                               <div class="mb-3">
                                    <label for="">Chịu nước</label>
                                    <input type="text" name="waterproof" id="" placeholder="Chịu nước" class="form-control mb-3" value="<?= $data['chiu_nuoc'] ?>">
                               </div>
                               <div class="mb-3">
                                    <label for="">Chức năng khác</label>
                                    <input type="text" name="function-other" id="" placeholder="Chức năng khác" class="form-control mb-3" value="<?= $data['chuc_nang_khac'] ?>">
                               </div>
                               <div class="mb-3">
                                    <label for="">Bảo hiểm</label>
                                    <input type="text" name="bhiProduct" id="" placeholder="Bảo hiểm" class="form-control mb-3" value="<?= $data['bao_hiem'] ?>">
                               </div>
                               <div class="mb-3">
                                    <label for="">Bảo hành quốc tế</label>
                                    <input type="text" name="bhaProduct" id="" placeholder="Bảo hành quốc tế" class="form-control mb-3" value="<?= $data['bao_hanh_QT'] ?>">
                               </div>
                               <div class="mb-3">
                                    <label for="">Số lượng</label>
                                    <input type="text" name="quantityProduct" id="" placeholder="Số lượng" class="form-control mb-3" value="<?= $data['So_luong'] ?>">
                               </div>
                               <div class="mb-3">
                                    <label for="">Chọn khuyến mãi</label>
                                    <select name="promotionProduct" id="sale" class="form-control" onchange="onchange_select()">
                                        <option value="1" >Không khuyến mãi</option>
                                        <option value="2" id="sale1">Giảm giá</option>
                                    </select>
                                        <input type="text" placeholder="Mức giảm: %" name="salePercent" id="salePercent" class="form-control mt-3" style="display:none;" maxlength="3">
                                </div>
                                <div class="button text-right">
                                    <button type="submit" name="addButton" class="mt-5 btn btn-primary align-right">Cập nhật sản phẩm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
   function onchange_select()
   {
        let obj = document.getElementById("sale");
        obj.options[obj.selectedIndex].value && obj.options[obj.selectedIndex].value == 2
        // document.getElementById("salePercent").style.display = "block";
        $('#salePercent').toggle(400);

   }
</script>