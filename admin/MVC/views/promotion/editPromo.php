<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng sửa khuyến mãi
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
                            <form action="?act=khuyenmai&sub=update" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="stt" value="<?=$data['stt']?>">
                               <div class="mb-3">
                                    <label for="">Mã khuyến mãi</label>
                                    <select  name="idPromo" class="form-control mb-3" >
                                        <?php foreach($dataBrand as $value) {?>
                                            <?php if($value['khuyenmai'] == $data['maKM']){$selected = "selected";}else{$selected = "";}?>
                                        <option value="<?=$value['khuyenmai']?>" <?=$selected?>><?=$value['khuyenmai']?></option>
                                        <?php }?>
                                    </select>
                                    <input type="hidden" name="sub-idPromo" value="maKM">
                               </div>
                               <div class="mb-3">
                                <label for="">Tên khuyến mãi</label>
                                <input type="text" name="namePromo" id="" placeholder="Tên khuyến mãi" class="form-control mb-3" value="<?= $data['tenKM'] ?>">
                                <input type="hidden" name="sub-namePromo" value="tenKM">
                               </div>
                               <div class="mb-3">
                                    <label for="">Loại khuyến mãi</label>
                                    <input type="text" name="typePromo" id="" placeholder="Loại khuyến mãi" class="form-control mb-3" value="<?=$data['loaiKM']?>">
                                    <input type="hidden" name="sub-typePromo" value="loaiKM">
                               </div>
                               <div class="mb-3">
                                    <label for="">Giá trị khuyến mãi</label>
                                    <input type="text" name="valuePromo" id="" placeholder="Giá trị khuyến mãi" class="form-control mb-3" value="<?= $data['giatriKM'] ?>">
                                    <input type="hidden" name="sub-valuePromo" value="giatriKM">
                               </div>
                                <div class="button text-right">
                                    <button type="submit" name="updateButton" class="mt-5 btn btn-primary align-right">Cập nhật khuyến mãi</button>
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