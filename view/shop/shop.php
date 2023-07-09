<div class="heading_shop row">
    <?php include("heading_shop.php"); ?>
</div>
<div class="row pt-5">
    <div class="col-md-3">
        <?php include("category.php"); ?>
    </div>
    <?php if (isset($_GET['search'])) { ?>
        <div class="col-md-9">
            <div class="page-Content_search section-padding">
                <div class="container">
                    <div class="row Content_search-wrap ">
                        <div class="col-md-12 inner-Content_search">
                            <h1>Có <?= $count ?> sản phẩm với từ khóa: <?= $_GET['search'] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page product_page pt-5">
                <div class="container">
                    <div class="row">
                        <?php foreach ($dataProduct as $value) { ?>
                            <div class="col-md-3 element-product p-2">
                                <div class="element-prod-wrap ">
                                    <div class="product-img">
                                        <img src="public/img/product/<?= $value['hinhanh_1'] ?>" alt="" style="width:100%;">
                                    </div>
                                    <div class="info-product pl-3 mt-3">
                                        <a href="?action=detail&id=<?= $value['idsp'] ?>&gt=<?= $value['gioi_tinh'] ?>" class="name_prod"><?= $value['ten_sp'] ?></a><br>
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
                        <?php  } ?>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="col-md-9">
                <div class="page-selected section-padding">
                    <div class="container">
                        <div class="row selected-wrap ">
                            <div class="col-md-12 inner-selected">
                                <div class="genderSelected">
                                    <div class="gender active_gender d-none">
                                        <div class="iconMale"></div>
                                        <a href="?action=Nam&gt=1">Đồng hồ nam</a>
                                    </div>
                                    <div class="gender d-none">
                                        <div class="iconFemale"></div>
                                        <a href="?action=Nu&gt=0">Đồng hồ nữ</a>
                                    </div>
                                </div>
                                <?php $id = isset($_GET['id_th']) ? $_GET['id_th'] : "0"; ?>
                                <select style="border: 1px solid #bfbebe;" name="sort" id="selected_box" onchange="onchange_selected()">
                                    <option value="null">Sắp xếp theo</option>
                                    <option value="?action=khuyenmai&id_th=<?= $id ?>&field=gia_sp&sort=ASC">Giá từ thấp đến cao</option>
                                    <option value="?action=khuyenmai&id_th=<?= $id ?>&field=gia_sp&sort=DESC">Giá từ cao đến thấp</option>
                                    <option value="?action=khuyenmai&id_th=<?= $id ?>&field=thoigian_them&sort=DESC">Mới nhất</option>
                                </select>
                                <?php ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page product_page pt-5">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($dataProduct as $value) { ?>
                                <div class="col-md-3 element-product p-2">
                                    <div class="element-prod-wrap ">
                                    <?php if($value['khuyenMai'] != '') {?>
                                        <div class="sale"><span>sale</span></div>
                                    <?php }?>
                                        <div class="product-img">
                                            <img src="public/img/product/<?= $value['hinhanh_1'] ?>" alt="" style="width:100%;">
                                        </div>
                                        <div class="info-product pl-3 mt-3">
                                            <a href="?action=detail&id=<?= $value['idsp'] ?>&gt=<?= $value['gioi_tinh'] ?>&id_th=<?= $value['idTH'] ?>" class="name_prod"><?= $value['ten_sp'] ?></a><br>
                                            <div class="describe_product">
                                                <span><?= $value['tenTH'] ?></span><span> <?php if ($value['gioi_tinh'] == 1) echo "Nam";
                                                else echo "Nữ"; ?></span>
                                                <span>-</span>
                                                <span><?= $value['sizemat'] ?>MM</span>
                                                <span>-</span>
                                                <span><?= $value['matkinh'] ?></span>
                                            </div>
                                            <div class="prod-price mt-5">
                                                <?php if($value['khuyenMai'] != '') {?>
                                                    <span style="font-size:15px;color:red;"><?= number_format($pricePromo[$value['idsp']], 0, ',', '.') ?>đ
                                                    <del class="text-body"> <?= number_format($value['gia_sp'], 0, ',', '.') ?></del>
                                                </span>
                                                <?php }else{?>
                                                    <span style="font-size:15px;color:red;"><?= number_format($value['gia_sp'], 0, ',', '.') ?>đ
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
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
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        function onchange_selected() {
            let obj = document.getElementById("selected_box");
            obj.options[obj.selectedIndex].value && (window.location = obj.options[obj.selectedIndex].value)
        }
    </script>