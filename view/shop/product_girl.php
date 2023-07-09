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
                                <div class="gender">
                                <div class="iconMale"></div>
                                <a href="?action=Nam&gt=1<?=$path?>">Đồng hồ nam</a>
                            </div>
                            <div class="gender active_gender">
                                <div class="iconFemale"></div>
                                <a href="?action=Nu&gt=0<?=$path?>">Đồng hồ nữ</a>
                            </div>
                        </div>
                        <?php $id = isset($_GET['id_th']) ? $_GET['id_th'] : "0";?>
                            <select style="border: 1px solid #bfbebe;" name="sort" id="selected_box" onchange="onchange_selected()">
                                <option value="null">Sắp xếp theo</option>
                                <option value="?action=Nu&gt=0&field=gia_sp&sort=ASC<?=$path?><?=$namePagelk?><?=$pagelk?>">Giá từ thấp đến cao</option>
                                <option value="?action=Nu&gt=0&field=gia_sp&sort=DESC<?=$path?><?=$namePagelk?><?=$pagelk?>">Giá từ cao đến thấp</option>
                                <option value="?action=Nu&gt=0&field=thoigian_them&sort=DESC<?=$path?><?=$namePagelk?><?=$pagelk?>">Mới nhất</option>
                                <option value="">ưu tiên</option>
                            </select>
                        <?php ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="page product_page pt-5">
            <div class="container">
                <div class="row">
                    <?php foreach($dataProduct as $value) { ?>
                        <div class="col-md-3 element-product p-2">
                            <div class="element-prod-wrap ">
                                <div class="product-img">
                                    <img src="public/img/product/<?= $value['hinhanh_1'] ?>" alt="" style="width:100%;">
                                </div>
                                <div class="info-product pl-3 mt-3">
                                    <a href="?action=detail&id=<?= $value['idsp']?>&gt=<?=$value['gioi_tinh']?>&id_th=<?=$value['idTH']?>" class="name_prod">Đồng hồ <?= $value['ten_sp'] ?></a><br>
                                    <div class="describe_product">
                                            <span><?= $value['tenTH'] ?></span><span> <?php if($value['gioi_tinh'] == 1) echo "Nam"; else echo "Nữ"; ?></span>
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
                    <?php  } ?>
                </div>
            </div>
        </div>
        <?php if(isset($_GET['sub'])){?>
            <div class="page p-5">
            <ul class="flex-d justify-content-center numPage" data-numpage="<?=$numPage?>">
                <?php for($i=1;$i<=$page;$i++){?>
                <li class="px-3 py-2 mr-3 page<?=$i?>" data-page="<?=$i?>" style="font-size: 15px;"><a href="?action=Nam&gt=1<?=$path1?>&page=<?=$i?>"><?=$i?></a></li>
                <?php }?>
            </ul>
        </div>
        <?php }else{?>
            <div class="page p-5">
            <ul class="flex-d justify-content-center numPage" data-numpage="<?=$numPage?>">
                <?php for($i=1;$i<=$page;$i++){?>
                <li class="px-3 py-2 mr-3 page<?=$i?>" data-page="<?=$i?>" style="font-size: 15px;"><a href="?action=Nam&gt=1<?=$path?>&page=<?=$i?>"><?=$i?></a></li>
                <?php }?>
            </ul>
        </div>
        <?php }?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
         function onchange_selected() {
                let obj = document.getElementById("selected_box");
                obj.options[obj.selectedIndex].value && (window.location = obj.options[obj.selectedIndex].value)
            }
    </script>
     <script>
         $(document).ready(function(){
            numPage = $('.numPage').data('numpage');
            for(var i=1;i<=numPage;i++){
                var obj = $('.page'+i);
            }
            $(obj).click(function(){
                $(obj).css('background',' black');
            })
         })
    </script>