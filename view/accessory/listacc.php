<div class="page product_page pt-5">
    <!-- <div class="container"> -->
        <!-- <div class="row"> -->
            <?php foreach ($dataacc as $value) { ?>
                <div class="col-md-3 element-product p-2">
                    <div class="element-prod-wrap ">
                        <div class="product-img">
                            <img src="public/img/phukien/<?= $value['hinhanh'] ?>" alt="" style="width:100%;">
                        </div>
                        <div class="info-product pl-3 mt-3">
                            <a href="?action=detail&id=<?= $value['idpk'] ?>?>" class="name_prod"><?= $value['tenpk'] ?></a><br>
                            <div class="describe_product ">
                                <p>Phụ kiện đồng hồ</p>
                            </div>
                            <div class="prod-price mt-5">
                                <strong style="color: red;"><?= number_format($value['gia']) ?> VNĐ</strong>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        <!-- </div>
    </div> -->
</div>