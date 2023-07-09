<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng thêm danh mục phụ kiện
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
                            <form action="?act=chitietphukien&sub=add&condition=idpk" method="post" class="form-group" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="">Mã phụ kiện</label>
                                    <input type="text" name="idAcceDetail" placeholder="Mã phụ kiện" class="form-control" >
                                    <input type="hidden" name="sub-idAcceDetail" value="idpk">
                                </div>
                                <div class="mb-3">
                                    <label for="">Mã danh mục phụ kiện</label>
                                    <select name="idAcce" id="" class="form-control">
                                        <?php foreach($dataAcce as $value){?>
                                        <option value="<?=$value['idlpk']?>"><?=$value['idlpk']?> - <?=$value['loaipk']?></option>
                                        <?php }?>
                                    </select>
                                    <input type="hidden" name="sub-idAcce" value="idlpk">
                                </div>
                                <div class="mb-3">
                                    <label for="">Tên phụ kiện</label>
                                    <input type="text" name="nameAcce" placeholder="Tên phụ kiện" class="form-control mb-3">
                                    <input type="hidden" name="sub-nameAcce" value="tenpk">
                                </div>
                                <div class="mb-3">
                                    <label for="">Giá phụ kiện</label>
                                    <input name="priceAcce" class="form-control mb-3" >
                                    <input type="hidden" name="sub-priceAcce" value="gia">
                                </div>
                                <div class="mb-3">
                                    <label for="">Hình ảnh</label>
                                    <input name="imgAcce" class="form-control mb-3" type="file">
                                    <input type="hidden" name="sub-imgAcce" value="hinhanh">
                                </div>
                                <div class="mb-3">
                                    <label for="">Màu sắc</label>
                                    <input name="colorAcce" class="form-control mb-3" >
                                    <input type="hidden" name="sub-colorAcce" value="mausac">
                                </div>
                                <div class="mb-3">
                                    <label for="">Chất liệu</label>
                                    <input name="materialAcce" class="form-control mb-3" >
                                    <input type="hidden" name="sub-materialAcce" value="chatlieu">
                                </div>
                                <div class="mb-3">
                                    <label for="">Size</label>
                                    <input name="sizeAcce" class="form-control mb-3" >
                                    <input type="hidden" name="sub-sizeAcce" value="size">
                                </div>
                                <div class="button text-right">
                                    <button type="submit" name="addButton" class="mt-5 btn btn-primary align-right">Thêm phụ kiện</button>
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