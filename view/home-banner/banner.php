<div class="banner-desktop">
    <?php foreach ($banner as $value) { ?>
        <div class="wrapper-expertise bg-3_221">
            <div class="row expertise">
                <div class="col-md-6 d-flex  align-items-center">
                    <div class="wrapper-text ml-5">
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
                <div class="col-md-6" style="padding-left:0px !important;padding-right:0px !important;">
                    <img src="public/img/home/<?= $value['hinhanh'] ?>" alt="" style="width:100%; height:270px">
                </div>
            </div>
        </div>
</div>
<?php } ?>
</div>

<!-- mobile -->