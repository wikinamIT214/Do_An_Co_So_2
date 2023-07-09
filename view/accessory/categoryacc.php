<div class=" pt-5">
    <div class="row">
        <div class="category-wrap">
            <div class="element-category">
                <div class="name-category">
                    <h3>Phụ kiện đồng hồ</h3>
                </div>
                <hr>
                <?php foreach ($data_acce as $row) { ?>
                    <div class="filter_inner">
                        <div class="filter_item">
                            <input type="radio" name="filter_brand" id="">
                            <a href=""><?= $row['loaipk'] ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="element-category">
                <div class="name-category">
                    <h3>Mức giá</h3>
                </div>
                <hr>
                <form action="">
                <div class="filter_inner">
                    <div class="filter_item">
                    <input type="radio" name="filter_brand" id="">
                            <a href="">Dưới 500 trăm</a>
                    </div>
                </div>
                <div class="filter_inner">
                    <div class="filter_item">
                    <input type="radio" name="filter_brand" id="">
                            <a href="">Từ 500 trăm - 1 triệu</a>
                    </div>
                </div>
                <div class="filter_inner">
                    <div class="filter_item">
                    <input type="radio" name="filter_brand" id="">
                            <a href="">Từ 1 triệu - 2 triệu</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <link rel="stylesheet" href="public/css/shop.css"> -->