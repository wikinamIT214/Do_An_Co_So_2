
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/home.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="wrapper-quality">
        <div class="row layout ">
            <div class="col-lg-6 col-12">
                <div class=" quality-items d-flex justify-content-center align-items-center bg-f5f5f5">
                    <span><img src="public/img/home/logo-bao_hanh.png" alt="Bảo hành số 1" style="width:30px"></span>
                    <div class="title-quality">Đơn vị số 1 về bảo hành</div>
                </div>
            </div>
            <div class="col-lg-6 col-12 margin-top-mobile margin-top-mobileMax-12">
                <div class="  quality-items mx-auto d-flex justify-content-center align-items-center bg-f5f5f5 bottom">
                    <span><img src="public/img/home/logo-return_to-money.png" alt="" style="width:30px"></span>
                    <div class="title-quality">Đền bù gấp 2 nếu phát hiện hàng fake</div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <?php
            include("banner.php");
        ?>
    </div>
    <!-- <div class="banner-mobile">
        <div class="row ">
            <?php foreach ($banner as $value) { ?>
                <div class="colmnmb-12" style="padding-left:0px !important;padding-right:0px !important;">
                    <img src="public/img/home/<?= $value['hinhanh'] ?>" alt="" style="width:100%; height:270px">
                </div>
                <div class="columnmb-12 d-flex  align-items-center">
                    <div class="wrapper-text">
                        <div class="title-td">
                            <h2><?= $value['tieu_de'] ?></h2>
                        </div>
                        <div class="text-td">
                            <p><?= $value['mota'] ?></p>
                        </div>
                        <?php if ($value['maKM'] != "") { ?>
                            <div class="buttonGroup">
                                <a href="?action=khuyenmai&id_th=<?= $value['thuonghieukhuyenmai'] ?>&maKM=<?= $value['maKM'] ?>" type="link" class="p-2 link-expertise">
                                    <span>Đi đến <?= $value['path'] ?></span>
                                    <span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div> -->
  <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div class="band-3up pt-5 ">
        <ul class="row row--sm">
            <?php foreach ($loaiShop as $value) { ?>
                <li class="col-md-4 col-4 band-item">
                    <div class="band">
                        <div class="band-img ">
                            <span>
                                <picture>
                                    <img src="public/img/home/<?= $value['ten'] ?>" alt="">
                                </picture>
                            </span>
                        </div>
                        <div class="band-content mt-4 text-center">
                            <h2><?= $value['tieude'] ?></h2>
                            <div class="buttonGroup2">
                            <?php if($value['path'] == 'Nam') $gt=1; else if($value['path'] == 'Nu') $gt=0; else $gt = 2?>
                                <a href="?action=<?=$value['path']?>&gt=<?=$gt?>"><?= $value['Loai_shop'] ?></a>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>

        </ul>
    </div>
    <div class="bands-1 pt-7">
        <div class="row">
            <div class="col-md-12">
                <div class="title_new-product">
                    <h2>Đồng hồ mới</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="bands-2 pt-5">
        <ul class="row">
            <?php $i = 1;
            foreach ($newproduct as $value) { ?>
                <li class="col-lg-2 col-4 brand-item">
                    <div class="inner_brand-item">
                        <a href="?action=detail&id=<?= $value['idsp'] ?>&gt=<?=$value['gioi_tinh']?>&id_th=<?=$value['idTH']?>"><img src="public/img/product/<?= $value['hinhanh_1'] ?>" alt=""  class="imgWrap"></a>
                        <div class="band-content text-center pt-4">
                            <p><?= $value['ten_sp'] ?></p>
                        </div>
                    </div>
                </li>
            <?php }
            $i++ ?>
        </ul>
    </div>
    <div>&nbsp;</div>
    <div class="pt-5">
        <div class="band-3up">
            <ul class="row row--sm text-center ul-band-3up">
                <li class="col band-item border-right border-dark">
                    <div class="band">
                        <div class="band-img ">
                            <span>
                                <picture>
                                    <img src="public/img/home/1 đổi 1.png" alt="" style="width:100px">
                                </picture>
                            </span>
                        </div>
                        <div class="band-content mt-4 text-center">
                            <p>1 đổi 1 trong vòng 30 ngày nếu lỗi của nhà sản xuất</p>
                        </div>
                    </div>
                </li>
                <li class="col band-item border-right border-dark">
                    <div class="band">
                        <div class="band-img">
                            <span>
                                <picture>
                                    <img src="public/img/home/freeship.png" alt="" style="width:100px">
                                </picture>
                            </span>
                        </div>
                        <div class="band-content mt-4 text-center">
                            <p>Miễn phí vận chuyển</p>
                        </div>
                    </div>
                </li>
                <li class="col band-item ">
                    <div class="band">
                        <div class="band-img">
                            <span>
                                <picture>
                                    <img src="public/img/home/baohanh.png" alt="" style="width:100px">
                                </picture>
                            </span>
                        </div>
                        <div class="band-content mt-4 text-center">
                            <p>Tặng gói bảo hành 5 năm cho người dùng</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="pt-7 bg-white pl-3" style="height: 100%;">
        <div class="">
            <div class="element-row row">
                <div class="element-col col-md-6 ">
                    <div class="elementtor-img">
                        <img src="public/img/home/winter-2022-2023.png" alt="">
                    </div>
                </div>
                <div class="element-col col-md-6">
                    <div class="element-col-wrap text-left " >
                        <div class="element-widget-wrap">
                            <div class="title-col-top">
                                <h2>Thu Đông 2022</h2>
                            </div>
                            <div class="text-col-bottom">
                                <div class="element-text-editor">
                                    <p>Với thời tiết đang dần về những ngày cuối đông như nay thì việc chọn nhưng mẫu đồng hồ phụ hợp với thời tiết cũng rất là quan trọng.Lựa chọn đồng hồ phụ hợp với thời tiết vừa giúp bạn trở nên tinh tế nó còn đam bảo được các vấn đề về sức khỏe</p>
                                </div>
                            </div>
                            <!-- <div class="buttonGroup">
                                <a href="" type="link" class="p-2 link-expertise">
                                    <span>Xem cửa hàng</span>
                                    <span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white pt-7 elementor-section elementor-top-section " data-id="111bafb" data-element_type="section" style="height:auto;padding-top:20rem;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36e2e04" data-id="36e2e04" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-7321a4a elementor-widget elementor-widget-heading" data-id="7321a4a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3>@watch_tran.store</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2ea37ed elementor-widget elementor-widget-text-editor pt-5" data-id="2ea37ed" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>Follow us on Instagram</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elementor-section bg-white pt-5 pb-5" data-id="fb6e350" data-element_type="section">
        <div class="elementor-container container-fluid ">
            <div class="elementor-row row ">
                <?php foreach ($anh_gt as $value) { ?>
                    <div class="elementor-column col-md-2 col-4" data-id="7a610e0" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated " style="display: flex;">
                            <div class="watch_tran-slider-item-instagram ">
                                <div class="box-images-slider " style="width:100%;height:100%">
                                    <a href="">
                                        <img id="img" src="public/img/home/slider/<?= $value['ten_anh'] ?>" style="width:100%;">
                                    </a>
                                </div>
                                <!-- <div class="overlay_box-img"></div> -->
                                <div class="box-icon">
                                    <a href="" class="lenos-link">
                                        <span class="icon">
                                            <i class="fab fa-instagram fa-2x" style="color: white;"></i>
                                        </span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</div>
</body>
</html>
