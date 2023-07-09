<div class="container-fluid">
    <div class="page-heading pt-3">
        <!-- strat part 1 -->
        <?php if (isset($_GET['id_th']) && !isset($_GET['gt']) && $_GET['action'] == "thuonghieu") { ?>
            <nav class="product-path">
                <ul class="flex-d">
                    <li>
                        <a href="?action=home" style="color: blue;">Trang chủ</a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="#" style="color: blue;">Đồng hồ</a>
                    </li>
                    <li>
                        <?php foreach ($brand_prod as $value) { ?>
                            <span>&nbsp; > </span><a href="#" style="color: black;">Đồng hồ <?= $value['tenTH'] ?></a>
                    </li>
                </ul>
            </nav>
            <div class="title-product_shop pt-4">
                <div class="main_title-product">
                    <h3>Đồng hồ <?= $value['tenTH'] ?></h3>
                </div>
            </div>
        <?php } ?>

        <!-- end part 1 -->

        <!-- ================ -->

        <!-- start part 2 -->
        <?php  } else if (isset($_GET['gt']) && isset($_GET['id_th']) && $_GET['action'] != "khuyenmai"){ ?>
            <nav class="product-path">
                <ul class="flex-d">
                    <li>
                        <a href="?action=home" style="color: blue;">Trang chủ</a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="" style="color: blue;">Đồng hồ</a>
                    </li>
                    <li>
                        <?php foreach ($brand_prod as $value) { ?>
                            <span>&nbsp; > </span><a href="" style="color: blue;">Đồng hồ <?= $gender ?></a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="" style="color: black;">Đồng hồ <?= $value['tenTH'] ?></a>
                    </li>
                </ul>
            </nav>
            <div class="title-product_shop pt-4">
                <div class="main_title-product">
                    <h3>Đồng hồ <?= $gender ?> <?= $value['tenTH'] ?></h3>
                </div>
            </div>
        <?php } ?>
    <!-- end part 2 -->
    <!-- ================= -->

    <!-- start part 3 -->
        <?php } else if (isset($_GET['gt']) && empty($_GET['id_th'])) { ?>
            <nav class="product-path">
                <ul class="flex-d">
                    <li>
                        <a href="?action=home" style="color: blue;">Trang chủ</a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="" style="color: blue;">Đồng hồ</a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="" style="color: black;">Đồng hồ <?= $gender ?></a>
                    </li>
                </ul>
            </nav>
            <div class="title-product_shop pt-4">
                <div class="main_title-product">
                    <h3>Đồng hồ <?= $gender ?></h3>
                </div>
            </div>
        <?php }else if(isset($_POST['search'])){?>

            <nav class="product-path">
                <ul class="flex-d">
                    <li>
                        <a href="?action=home" style="color: blue;">Trang chủ</a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="" style="color: black;">Tìm kiếm</a>
                    </li>
                    
                </ul>
            </nav>
        <?php } if($_GET['action'] == "khuyenmai"){?>
            <?php foreach ($brand_prod as $value) { ?>
            <nav class="product-path">
                <ul class="flex-d">
                    <li>
                        <a href="?action=home" style="color: blue;">Trang chủ</a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="" style="color: blue;">Khuyến mãi</a>
                    </li>
                    <li>
                        <span>&nbsp; > </span><a href="" style="color: black;">Đồng hồ <?= $value['tenTH'] ?></a>
                    </li>
                </ul>
            </nav>
            <div class="title-product_shop pt-4">
                <div class="main_title-product">
                    <h3>Đồng hồ <?= $value['tenTH'] ?></h3>
                </div>
            </div>
                <?php }?>
        <?php }?>
<!-- end part 3 -->
    </div>
    <div class="number_value px-4">
        <?php if($start != 0 && $end != 0){?>
            <div class="ml-3">
            <p style="font-size:15px;font-family:roboto;">Hiển thị <strong><?=$start?></strong> - <strong><?=$end?></strong> của <strong><?=$numProduct?></strong> kết quả</p>
        </div>
        <?php }else if(isset($_GET['search'])){?>
            <p style="font-size:15px;font-family:roboto;">Có <strong><?=$count?></strong> kết quả được hiện thị</p>
        <?php }else{?>
            <p style="font-size:15px;font-family:roboto;">Có <strong>0</strong> kết quả được hiện thị</p>
        <?php }?>
    </div>
</div>