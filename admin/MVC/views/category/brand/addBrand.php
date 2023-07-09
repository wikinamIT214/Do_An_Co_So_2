<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng thêm thương hiệu
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=thuonghieu&sub=add">
                            <?php if(isset($_COOKIE['add'])) echo $_COOKIE['add']?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="page-addProduct">
                    <div class="form-wrap px-3 py-4">
                        <div class="main-form pt-3">
                            <form action="?act=thuonghieu&sub=add&condition=idTH" method="post" class="form-group" enctype="multipart/form-data">
                            <div class="mb-3">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" name="id" placeholder="Mã sản phẩm" class="form-control mb-3" >
                                    <input type="hidden" value="idTH" name="sub-id">
                               </div>
                               <div class="mb-3">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" name="name" id=""  placeholder="Tên sản phẩm" class="form-control mb-3" >
                                    <input type="hidden" value="tenTH" name="sub-name">
                               </div>
                              <div class="mb-3">
                                <label for="">Hình ảnh</label>
                                <input type="file" name="img" id="" placeholder="Hình ảnh" class="form-control mb-3">
                                <input type="hidden" value="hinhanh" name="sub-img">
                              </div>
                               <div class="mb-3">
                                    <label for="">Mô tả thương hiệu</label>
                                    <textarea name="describe" id="" cols="30" rows="10" class="form-control"></textarea>
                                    <input type="hidden" name="sub-describe" value="mota">
                               </div>
                                <div class="button text-right">
                                    <button type="submit" name="addButton1" class="mt-5 btn btn-primary align-right">Thêm thương hiệu</button>
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