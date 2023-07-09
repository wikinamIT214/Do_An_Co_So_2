<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng sửa loại máy
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
                            <form action="?act=loaimay&sub=update&condition=idLM" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="id" placeholder="Mã loại máy" class="form-control mb-3" value="<?=$data['idLM']?>">
                                <input type="hidden" name="sub-id" value="idLM">
                               <div class="mb-3">
                                    <label for="">Tên loại máy</label>
                                    <input type="text" name="name" id="" value="<?= $data['tenLM'] ?>" placeholder="Tên loại máy" class="form-control mb-3">
                                    <input type="hidden" name="sub-name" value="tenLM">
                               </div>
                                <div class="img1 mb-3">
                                    <img src="../public/img/<?=$data['hinhanh']?>" alt="" style="width:180px;background-color:#f5f5f5">
                                </div> 
                                <input type="file" name="img" id="" placeholder="Hình ảnh" class="form-control mb-3">
                                <input type="hidden" name="img-sub" id=""  value="<?=$data['hinhanh']?>">
                                <input type="hidden" name="sub-img" value="hinhanh">
                               <div class="mb-3">
                                    <label for="">Mô tả loại máy</label>
                                    <textarea name="describe" id="" cols="30" rows="10" class="form-control"><?=$data['mota']?></textarea>
                                    <input type="hidden" name="sub-describe" value="mota">
                               </div>
                                <div class="button text-right">
                                    <button type="submit" name="updateButton" class="mt-5 btn btn-primary align-right">Cập nhật loại máy</button>
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