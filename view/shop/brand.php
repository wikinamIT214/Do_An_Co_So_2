<div class="heading_shop row">
    <?php include("heading_shop.php"); ?>
</div>
<div class="row pt-5">
    <div class="col-md-3">
        <?php include("category.php"); ?>
    </div>
    <div class="col-md-9">
        <div class="page-selected section-padding">
            <div class="container">
                <div class="row selected-wrap ">
                    <div class="col-md-12 inner-selected">
                        <div class="genderSelected">
                            <div class="py-3 px-5">
                                <a href="?action=Nam&gt=1&id_th=<?=$_GET['id_th']?>" style="color:black;">Đồng hồ Nam</a>
                            </div>
                            <div class="py-3 px-5">
                                <a href="?action=Nu&gt=0&id_th=<?=$_GET['id_th']?>" style="color:black;">Đồng hồ Nữ</a>
                            </div>
                        </div>
                        <select style="border: 1px solid #bfbebe;" name="sort" id="selected_box" onchange="onchange_selected()">
                            <option value="null">Sắp xếp theo</option>
                            <option value="?action=thuonghieu<?=$path?>&field=gia_sp&sort=ASC">Giá từ thấp đến cao</option>
                            <option value="?action=thuonghieu<?=$path?>&field=gia_sp&sort=DESC">Giá từ cao đến thấp</option>
                            <option value="?action=thuonghieu<?=$path?>&field=thoigian_them&sort=DESC">Mới nhất</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="page product_page pt-5">
            <div class="container">
                <div class="row">
                    <?php $count = 0; foreach ($dataBrand as $value) { $count+=1?>
                        <div class="col-md-3 element-product p-2">
                            <div class="element-prod-wrap ">
                                <div class="product-img">
                                    <img src="public/img/product/<?= $value['hinhanh_1'] ?>" alt="" style="width:100%;">
                                </div>
                                <div class="info-product pl-3 mt-3">
                                    <a href="?action=detail&id=<?= $value['idsp'] ?>&id_th=<?=$value['idTH']?>&gt=<?=$value['gioi_tinh']?>" class="name_prod">Đồng hồ <?= $value['ten_sp'] ?></a><br>
                                    <div class="describe_product">
                                        <span><?= $value['tenTH'] ?></span><span> <?php if ($value['gioi_tinh'] == 1) echo "Nam";
                                                                                    else echo "Nữ"; ?></span>
                                        <span>-</span>
                                        <span><?= $value['sizemat'] ?>MM</span>
                                        <span>-</span>
                                        <span><?= $value['matkinh'] ?></span>
                                    </div>
                                    <div class="prod-price mt-5">
                                        <strong style="color: red;"><?= number_format($value['gia_sp']) ?> VNĐ</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  }?>
                </div>
            </div>
        </div>
            <div class="page p-5">
            <ul class="flex-d justify-content-center">
                <?php for($i=1;$i<=$numPage;$i++){?>
                <li class="px-3 py-2 mr-3" style="font-size: 15px;border:1px solid black;"><a href="?action=thuonghieu<?=$path?>&page=<?=$i?>"><?=$i?></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.gender').click(function() {
                $('.gender').removeClass('active_gender');
                $(this).addClass('active_gender');
                return false;
            })
        })

        function onchange_selected() {
            let obj = document.getElementById("selected_box");
            obj.options[obj.selectedIndex].value && (window.location = obj.options[obj.selectedIndex].value)
        }
    </script>
    <script>
        $(document).ready(function(){
        var numPage = $('.numPage').data('numpage');
        for(var i=1;i<=numPage;i++){
            var obj = $('.page'+i);
            var page = $(obj).data('page');
            if(page == 1 || page == '')
            {
                $(obj).css('border','1px solid grey');
            }else{
                $(obj).click(function(){
                    $(obj).css('border','1px solid grey');
                })
            }
        }
        
        })
</script>