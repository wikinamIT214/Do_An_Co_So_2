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
                            <form action="?act=phukien&sub=add&condition=idlpk" method="post" class="form-group" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="">Mã danh mục phụ kiện</label>
                                    <input type="text" name="idAcce" placeholder="Mã danh mục phụ kiện" class="form-control">
                                    <input type="hidden" name="sub-idAcce" value="idlpk">
                                </div>
                                <div class="mb-3">
                                    <label for="">Loại phụ kiện</label>
                                    <input type="text" name="typeAcce" placeholder="Loại phụ kiện" class="form-control mb-3">
                                    <input type="hidden" name="sub-typeAcce" value="loaipk">
                                </div>
                                <div class="mb-3">
                                    <label for="">Mô tả</label>
                                    <textarea name="describeAcce" class="form-control mb-3" cols="30" rows="10"></textarea>
                                    <input type="hidden" name="sub-describeAcce" value="mota_lpk">
                                </div>
                                <div class="button text-right">
                                    <button type="submit" name="addButton" class="mt-5 btn btn-primary align-right">Thêm sản phẩm</button>
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