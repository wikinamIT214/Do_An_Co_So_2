<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng sửa phụ kiện
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
                            <form action="?act=chitietphukien&sub=update&condition=idpk" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="idAcce" placeholder="Mã sản phẩm" class="form-control mb-3" value="<?=$data['idpk']?>">
                                <input type="hidden" name="sub-idAcce" placeholder="Mã sản phẩm" class="form-control mb-3" value="idpk">
                                <div class="mb-3">
                                    <label for=""> Mã danh mục phụ kiện</label>
                                    <select type="text" name="idAcceDetail" id="" class="form-control mb-3">
                                        <?php foreach($dataAcce as $value){?>
                                            <?php if($data['idlpk'] == $value['idlpk']){$selected = "selected";?>
                                        <option value="<?=$value['idlpk']?>" <?=$selected?>><?=$value['idlpk']?> - <?=$value['loaipk']?></option>
                                        <?php }{$selected = "";?>
                                            <option value="<?=$value['idlpk']?>" <?=$selected?>><?=$value['idlpk']?> - <?=$value['loaipk']?></option>
                                        <?php }?>
                                        <?php }?>
                                    </select>
                                    <input type="hidden" name="sub-idAcceDetail" value="idlpk">
                               </div>
                               <div class="mb-3">
                                    <label for="">Tên phụ kiện</label>
                                    <input type="text" name="nameAcce" id="" value="<?= $data['tenpk'] ?>" placeholder="Tên phụ kiện" class="form-control mb-3">
                                    <input type="hidden" name="sub-nameAcce" value="tenpk">
                               </div>
                               <div class="mb-3">
                                    <label for="">Giá</label>
                                    <input type="text" name="priceAcce" id="" placeholder="Mô tả" class="form-control mb-3" value="<?= $data['gia'] ?>">
                                    <input type="hidden" name="sub-priceAcce" value="gia">
                               </div>
                               <div class="mb-3">
                                    <div class="Showimg">
                                        <img src="../public/img/phukien/<?=$data['hinhanh']?>" alt="" width="100px">
                                    </div>
                                    <label for="">Hình ảnh</label>
                                    <input type="file" name="imgAcce" id="" placeholder="hình ảnh" class="form-control mb-3" value="">
                                    <input type="hidden" name="sub-imgAcce" value="hinhanh">
                                    <input type="hidden" name="imgAcce1" value="<?=$data['hinhanh']?>">
                               </div>
                               <div class="mb-3">
                                    <label for="">Chất liệu</label>
                                    <input type="text" name="materialAcce" id="" placeholder="Chất liệu" class="form-control mb-3" value="<?= $data['chatlieu'] ?>">
                                    <input type="hidden" name="sub-materialAcce" value="chatlieu">
                               </div>
                               <div class="mb-3">
                                    <label for="">Màu sắc</label>
                                    <input type="text" name="colorAcce" id="" placeholder="Màu sắc" class="form-control mb-3" value="<?= $data['mausac'] ?>">
                                    <input type="hidden" name="sub-colorAcce" value="mausac">
                               </div>
                               <div class="mb-3">
                                    <label for="">Size</label>
                                    <input type="text" name="sizeAcce" id="" placeholder="Size" class="form-control mb-3" value="<?= $data['size'] ?>">
                                    <input type="hidden" name="sub-sizeAcce" value="size">
                               </div>
                                <div class="button text-right">
                                    <button type="submit" name="updateButton" class="mt-5 btn btn-primary align-right">Cập nhật sản phẩm</button>
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