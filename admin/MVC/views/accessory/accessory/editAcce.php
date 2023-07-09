<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng sửa danh mục thương hiệu
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
                            <form action="?act=phukien&sub=update&condition=idlpk" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="idAcce" placeholder="Mã sản phẩm" class="form-control mb-3" value="<?=$data['idlpk']?>">
                                <input type="hidden" name="sub-idAcce" placeholder="Mã sản phẩm" class="form-control mb-3" value="idlpk">
                               <div class="mb-3">
                                    <label for="">Danh mục phụ kiện</label>
                                    <input type="text" name="nameAcce" id="" value="<?= $data['loaipk'] ?>" placeholder="Danh mục phụ kiện" class="form-control mb-3">
                                    <input type="hidden" name="sub-nameAcce" value="loaipk">
                               </div>
                               <div class="mb-3">
                                <label for="">Mô tả</label>
                                <input type="text" name="describeAcce" id="" placeholder="Mô tả" class="form-control mb-3" value="<?= $data['mota_lpk'] ?>">
                                <input type="hidden" name="sub-describeAcce" value="mota_lpk">
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