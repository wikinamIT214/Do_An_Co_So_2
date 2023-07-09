<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng thêm sản phẩm
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
                            <form action="?act=product&sub=add" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="text" name="idProduct" placeholder="Mã sản phẩm" class="form-control mb-3">
                                <div class="mb-3">
                                    <label for="">Chọn mã thương hiệu</label>
                                    <select name="codeBrand" id="" class="form-control">
                                        <option value="1">Mã thương hiệu là 1 - Citizen</option>
                                        <option value="2">Mã thương hiệu là 2 - Orient</option>
                                        <option value="3">Mã thương hiệu là 3 - Bentley</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Chọn mã loại máy</label>
                                    <select name="codeMachine" id="" class="form-control">
                                        <option value="1">Mã loại máy là 1 - Automatic</option>
                                        <option value="2">Mã loại máy là 2 - Quartz</option>
                                        <option value="3">Mã loại máy là 3 - Kinetic</option>
                                        <option value="4">Mã loại máy là 4 - Năng lượng mặt trời</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Chọn mã loại dây</label>
                                    <select name="codeWire" id="" class="form-control">
                                        <option value="1">Mã loại dây là 1 - Dây da</option>
                                        <option value="2">Mã loại dây là 2 - Dây thép không gỉ</option>
                                        <option value="3">Mã loại dây là 3 - Dây cao su</option>
                                        <option value="4">Mã loại dây là 4 - Dây titanium</option>
                                        <option value="5">Mã loại dây là 5 - Dây vải</option>
                                        <option value="6">Mã loại dây là 6 - Dây Nhựa</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Chọn giới tính</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                                <input type="text" name="nameProduct" id="" placeholder="Tên sản phẩm" class="form-control mb-3">
                                <input type="text" name="priceProduct" id="" placeholder="Giá sản phẩm" class="form-control mb-3">
                                <input type="file" name="img1Product" id="" placeholder="Hình ảnh 1" class="form-control mb-3">
                                <input type="file" name="img2Product" id="" placeholder="Hình ảnh 2" class="form-control mb-3">
                                <input type="file" name="img3Product" id="" placeholder="Hình ảnh 3" class="form-control mb-3">
                                <input type="text" name="describeProduct" id="" placeholder="Mô tả sản phẩm" class="form-control mb-3">
                                <input type="text" name="sizeProduct" id="" placeholder="Size mặt" class="form-control mb-3">
                                <input type="text" name="glass-surface" id="" placeholder="Mặt kính" class="form-control mb-3">
                                <input type="text" name="sourceProduct" id="" placeholder="Nguồn gốc sản phẩm" class="form-control mb-3">
                                <input type="text" name="waterproof" id="" placeholder="Chịu nước" class="form-control mb-3">
                                <input type="text" name="function-other" id="" placeholder="Chức năng khác" class="form-control mb-3">
                                <input type="text" name="bhiProduct" id="" placeholder="Bảo hiểm" class="form-control mb-3">
                                <input type="text" name="bhaProduct" id="" placeholder="Bảo hành quốc tế" class="form-control mb-3">
                                <input type="text" name="quantityProduct" id="" placeholder="Số lượng" class="form-control mb-3">
                                <div class="mb-3">
                                    <label for="">Chọn khuyến mãi</label>
                                    <select name="promotionProduct" id="sale" class="form-control" onchange="onchange_select()">
                                        <option value="1">Không khuyến mãi</option>
                                        <option value="2" id="sale1">Khuyến mãi</option>
                                    </select>
                                        <select name="salePercent" id="salePercent" class="form-control mt-3" style="display:none;" >
                                            <option value="null">Chọn mã khuyến mãi</option>
                                            <?php foreach($promo as $value) {?>
                                            <option value="<?=$value['maKM']?>"><?=$value['maKM']?></option>
                                            <?php }?>
                                        </select>
                                </div>
                                   <div class="mb-3">
                                    <label for="">Trạng thái</label>
                                    <input type="text" name="statusProduct" value="0" placeholder="Trạng thái" class="form-control mb-3">
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