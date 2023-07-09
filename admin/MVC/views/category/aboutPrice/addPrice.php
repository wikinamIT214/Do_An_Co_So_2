<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Bảng thêm khoảng giá
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
                            <form action="?act=khoanggia&sub=add&condition=idKG" method="post" class="form-group" enctype="multipart/form-data">
                            <div class="mb-3">
                                    <label for="">Mã khoảng giá</label>
                                    <input type="text" name="id" placeholder="Mã khoảng giá`" class="form-control mb-3" >
                                    <input type="hidden" value="idKG" name="sub-id">
                               </div>
                               <div class="mb-3">
                                    <label for="">Khoảng giá</label>
                                    <input type="text" name="name" id=""  placeholder="Từ % triệu - % triệu" class="form-control mb-3" >
                                    <input type="hidden" value="khoangGia" name="sub-name">
                               </div>
                              <div class="mb-3">
                                <label for="">Giá trị 1</label>
                                <input type="text" name="value1" id="" placeholder="Giá trị 1" class="form-control mb-3">
                                <input type="hidden" value="gt_1" name="sub-value1">
                              </div>
                              <div class="mb-3">
                                <label for="">Giá trị 2</label>
                                <input type="text" name="value2" id="" placeholder="Giá trị 2" class="form-control mb-3">
                                <input type="hidden" value="gt_2" name="sub-value2">
                              </div>
                                <div class="button text-right">
                                    <button type="submit" name="addButton1" class="mt-5 btn btn-primary align-right">Thêm khoảng giá</button>
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