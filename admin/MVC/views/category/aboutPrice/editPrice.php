<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng sửa khoảng giá
                <div class="card-action p-2 bg-light border border-2 border-light rounded">
                    <div class="dropdown">
                        <a href="?act=khoanggia&sub=add">
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="page-addProduct">
                    <div class="form-wrap px-3 py-4">
                        <div class="main-form pt-3">
                            <form action="?act=khoanggia&sub=update&condition=idKG" method="post" class="form-group" enctype="multipart/form-data">
                                <input type="hidden" name="id" placeholder="Mã khoảng giá" class="form-control mb-3" value="<?=$data['idKG']?>">
                                <input type="hidden" name="sub-id" value="idKG">
                               <div class="mb-3">
                                    <label for="">Khoảng giá</label>
                                    <input type="text" name="name" id="" value="<?= $data['khoangGia'] ?>" placeholder="Khoảng giá" class="form-control mb-3">
                                    <input type="hidden" name="sub-name" value="khoangGia">
                               </div>
                               <div class="mb-3">
                                    <label for="">Giá trị 1</label>
                                    <input type="text" name="value1" id="" value="<?=$data['gt_1']?>" class="form-control mb-3">
                                    <input type="hidden" value="gt_1" name="sub-value1">
                              </div>
                              <div class="mb-3">
                                    <label for="">Giá trị 2</label>
                                    <input type="text" name="value2" id="" value="<?=$data['gt_2']?>" class="form-control mb-3">
                                    <input type="hidden" value="gt_2" name="sub-value2">
                              </div>
                                <div class="button text-right">
                                    <button type="submit" name="updateButton" class="mt-5 btn btn-primary align-right">Cập nhật loại dây</button>
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