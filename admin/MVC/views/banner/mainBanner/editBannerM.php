<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng sửa banner
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
                            <form action="?act=banner&sub=update&condition=id" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="id" placeholder="Mã banner" class="form-control mb-3" value="<?=$data['id']?>">
                                <input type="hidden" name="sub-id" value="id">
                               
                                <div class="img1 mb-3">
                                    <img src="../public/img/home/<?= $data['hinhanh'] ?>" alt="" style="width:180px;background-color:#f5f5f5">
                                </div>
                                <input type="file" name="img" id="" placeholder="Hình ảnh " class="form-control mb-3">
                                <input type="hidden" name="img1" id=""  value="<?=$data['hinhanh']?>">
                                <input type="hidden" name="sub-img" value="hinhanh">
                                <div class="mb-3">
                                    <label for="">Tiêu đề</label>
                                    <input type="text" name="title" placeholder="tiêu đề" value="<?=$data['tieu_de']?>" class="form-control">
                                    <input type="hidden" name="sub-title" placeholder="tiêu đề" value="tieu_de">
                                </div>
                               <div class="mb-3">
                                    <label for="">Mô tả</label>
                                    <textarea name="describe" id="" cols="30" rows="10" class="form-control"><?=$data['mota']?></textarea>
                                    <input type="hidden" name="sub-describe" value="mota">
                               </div>
                               <div class="mb-3 ">
                                <label for="">Khuyến mãi</label>
                                <select name="" id="toggleShow" onchange="onchange_select()" class="form-control mb-3">
                                        <option value="0" >Không khuyến mãi</option>
                                        <option value="1">Khuyến mãi</option>
                                </select>
                                <input type="hidden" value="khuyenmai" name="sub-promo">
                              </div>
                              <div class="mb-3 " id="show1" style="display:none;">
                                <label for="">Mã khuyến mãi</label>
                                <select name="promo" id="toggleShow" onchange="onchange_select()" class="form-control mb-3">
                                <?php foreach($promo as $value){?>
                                        <option value="<?=$value['maKM']?>" ><?=$value['maKM']?></option>
                                <?php }?>
                                </select>
                                <input type="hidden" value="maKM" name="sub-promo">
                              </div>
                              <div class="mb-3" id="show2" style="display:none;">
                                <label for="">Thương hiệu khuyến mãi</label>
                                <select name="promoBrand" id="" class="form-control mb-3">
                                    <option value="0">Không có</option>
                                    <?php foreach($brand as $value) {?>
                                    <?php if($value['idTH'] == $data['thuonghieukhuyenmai']){$selected = "selected"?>
                                    <option value="<?=$value['idTH']?>" <?=$selected?>><?=$value['tenTH']?></option>
                                    <?php }?>
                                    <?php }?>
                                </select>
                                <input type="hidden" value="thuonghieukhuyenmai" name="sub-promoBrand">
                              </div>
                              <div class="mb-3 " id="show3"  style="display:none;" >
                                <label for="">Tên đường dẫn</label>
                                <input type="text" name="path" id="" placeholder="Tên đường dẫn" class="form-control mb-3" value="<?=$data['path']?>">
                                <input type="hidden" value="path" name="sub-path">
                              </div>
                                <div class="button text-right">
                                    <button type="submit" name="updateButton" class="mt-5 btn btn-primary align-right">Cập nhật thương hiệu</button>
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
          obj.options[obj.selectedIndex].value && obj.options[obj.selectedIndex].value == 1
        // document.getElementById("salePercent").style.display = "block";
        $('#show1').toggle(400);
        $('#show2').toggle(400);
        $('#show3').toggle(400);

 }
</script>