<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng thêm khuyến mãi
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=loaiday&sub=add">
                            <?php if(isset($_COOKIE['add'])) echo $_COOKIE['add']?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="page-addProduct">
                    <div class="form-wrap px-3 py-4">
                        <div class="main-form pt-3">
                            <form action="?act=khuyenmai&sub=add&condition=maKM" method="post" class="form-group" enctype="multipart/form-data">
                            <div class="mb-3">
                                    <label for="">Mã khuyến mãi</label>
                                    <select  name="idPromo" class="form-control mb-3" >
                                        <?php foreach($dataBrand as $value) {?>
                                        <option value="<?=$value['khuyenmai']?>"><?=$value['khuyenmai']?></option>
                                        <?php }?>
                                    </select>
                                    <input type="hidden" value="maKM" name="sub-idPromo">
                               </div>
                               <div class="mb-3">
                                    <label for="">Tên khuyến mãi</label>
                                    <input type="text" name="namePromo" id=""  placeholder="Tên khuyến mãi" class="form-control mb-3" >
                                    <input type="hidden" value="tenKM" name="sub-namePromo">
                               </div>
                              <div class="mb-3">
                                <label for="">Loại khuyến mãi</label>
                                <input type="text" name="typePromo" id="" placeholder="Tên khuyến mãi" class="form-control mb-3">
                                <input type="hidden" value="loaiKM" name="sub-typePromo">
                              </div>
                              <div class="mb-3">
                                <label for="">Giá trị khuyến mãi</label>
                                <input name="valuePromo" id="" placeholder="Giá trị khuyến mãi" class="form-control">
                                <input type="hidden" value="giatriKM" name="sub-valuePromo">
                              </div>
                                <div class="button text-right">
                                    <button type="submit" name="addButton1" class="mt-5 btn btn-primary align-right">Thêm khuyến mãi</button>
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
        let obj = document.getElementById("toggleShow");
        obj.options[obj.selectedIndex].value && obj.options[obj.selectedIndex].value == 2
        // document.getElementById("salePercent").style.display = "block";
        $('#show').toggle(400);

   }
</script>