<div class="container-fluid">
    <div class="news-heading constrained pt-3">
        <nav class="product-path">
            <ul class="flex-d">
                <li>
                    <a href="?action=home" style="color: blue;">Trang chủ</a>
                </li>
                <li>
                    <span>&nbsp; > </span><a href="" style="color: black;">Tư vấn đồng hồ</a>
                </li>
            </ul>
        </nav>
    </div>
        <div class="news-body constrained pt-5">
        <?php if (!isset($_POST['sb_keyword1'])) { ?>
            <div class="d-flex align-items-center justify-content-between">
                <div class="news-title">
                    <h1>Tư vấn chọn đồng hồ</h1>
                </div>
                <div class="news-search border border-1 px-3 height-3 py-2">
                    <form action="?action=kienthuc" method="post">
                        <input type="search" name="search1" id="" placeholder="Tìm kiếm tin tức....." class=" border-0" style="font-size:15px;">
                        <button type="submit" name="sb_keyword1" class="m-0 p-0"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <hr>
            
            <div class="row pt-4">
                    <?php foreach ($dataNews1 as $value) { ?>
                        <div class="col-6 news-main">
                            <div class="news-wrap">
                                <div class="news-img">
                                    <img src="public/img/news/<?= $value['hinhanh'] ?>" alt="" width="100%">
                                </div>
                                <div class="news-content pt-3">
                                    <div class="news-name">
                                        <a href="" class="descoration-none text-body">
                                            <h3><strong><?= $value['tentt'] ?></strong></h3>
                                        </a>
                                    </div>
                                    <div class="news-time">
                                        <h5 class="text-secondary"><?= $value['thoigianthem'] ?></h5>
                                    </div>
                                    <div class="news-title pt-3">
                                        <span>
                                            <h4 style="text-uppercase:none"><?= $value['tieudett'] ?></h4>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-6 news-sub">
                        <div class="row">
                            <?php foreach ($dataNews2 as $value) { ?>
                                <div class="col-md-6 ">
                                    <div class="news-img">
                                        <img src="public/img/news/<?= $value['hinhanh'] ?>" alt="" width="100%">
                                    </div>
                                    <div class="news-content pt-3">
                                        <div class="news-name">
                                            <a href="" class="descoration-none text-body">
                                                <h3><strong><?= $value['tentt'] ?></strong></h3>
                                            </a>
                                        </div>
                                        <div class="news-time">
                                            <h5 class="text-secondary"><?= $value['thoigianthem'] ?></h5>
                                        </div>
                                        <div class="news-title pt-3">
                                            <span>
                                                <p style="font-size:17px,line: height 1.5em;"><?= $value['tieudett'] ?></p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- <div class="col-6 page-newsR"></div> -->
                        </div>

                    </div>
            </div>
        </div>
        <?php } else if(isset($_POST['sb_keyword1'])) { ?>
        <div class="d-flex align-items-center justify-content-between">
            <div class="news-title">
                <h1>Kết quả tìm kiếm cho từ khóa: <?= $_POST['search1'] ?></h1>
            </div>
        </div>
        <hr>
        <?php foreach ($dataNews as $value) { ?>
            <div class="row">
                <div class="col-3">
                    <div class="news-img">
                        <img src="public/img/news/<?= $value['hinhanh'] ?>" alt="" width="100%">
                    </div>
                    <div class="news-content pt-3">
                        <div class="news-name">
                            <a href="" class="descoration-none text-body">
                                <h3><strong><?= $value['tentt'] ?></strong></h3>
                            </a>
                        </div>
                        <div class="news-time">
                            <h5 class="text-secondary"><?= $value['thoigianthem'] ?></h5>
                        </div>
                        <div class="news-title pt-3">
                            <span>
                                <p style="font-size:17px,line: height 1.5em;"><?= $value['tieudett'] ?></p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
</div>
<?php }?>

</div>