<main>
    <div class="page-detailProduct">
        <div class="page-body_1">
            <div class="row bg" style="margin-left:auto;margin-right:auto;">
                <div class="main col-md-8">
                    <div class="product-gallery">
                        <div class="img-gallery pt-7">
                            <div class="img-gallery-main ">                         
                                <div class="main-img text-center">
                                    <img src="../public/img/product/<?= $data['hinhanh_1'] ?>" alt="" style="max-width:300px;" id="main-img">
                                </div>
                            </div>
                            <div class="img-gallery-other text-center pt-5 pb-3">
                                <img class="active_1" src="../public/img/product/<?= $data['hinhanh_1'] ?>" alt="" id="1" width="75px" onclick="changeImg(1)">
                                <img src="../public/img/product/<?= $data['hinhanh_2'] ?>" alt="" id="2" width="75px" onclick="changeImg(2)">
                                <img src="../public/img/product/<?= $data['hinhanh_3'] ?>" alt="" id="3" width="75px" onclick="changeImg(3)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 frames-detail " style="padding-left:0px;padding-right:0px">
                    <div class="info-product-wrap ">
                        <div class="product-detail--header">
                            <div class="heading product-name">
                                <h1 class="d-grid">
                                    <span style="font-weight:600;font-size:34px;color:black;">Đồng hồ
                                        <span style="font-weight:600;font-size:34px;color:#487eb0;" class="name_product"><?= $data['ten_sp'] ?></span></span>
                                    <span style="font-weight:600;font-family:roboto;color:black;font-size:30px;" class="name_brand"><?= $data['tenTH'] ?></span>
                                    <span style="font-size: 15px;text-transform:none;padding:7px 5px;font-weight:600;font-family:roboto;color:black;"><?php if ($data['gioi_tinh'] == 1) echo "Nam";                                                        else echo "Nữ"; ?></span>
                                </h1>
                            </div>
                        </div>
                        <div class="ProductPrice">
                            <span><?= number_format($data['gia_sp'], 0, ',', '.') ?> VNĐ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3">
            <div id="ProductTabs" class="Tabs">
                <div class="Tabs-button">
                    <ul class="Tabs-list">
                        <li class="Tabs-listItem active" style="width:125px"><a href="#detail">Chi tiết</a></li>
                        <li class="Tabs-listItem" style="width:140px"><a href="#feedback">Đánh giá</a></li>
                        <li class="Tabs-listItem" style="width:215px"><a href="#insurance">Chế độ bảo hành</a></li>
                    </ul>
                </div>
                </form>
                <div class="Tab-content ">
                    <div class="Tab-content_item" id="detail">
                        <h3>Chi tiết sản phẩm</h3>
                        <div class="tb">
                            <ul class="inner-infoProd">
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Nhãn hiệu</div>
                                    <div class="value_infoProd"><?= $data['tenTH'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Nguồn gốc</div>
                                    <div class="value_infoProd"><?= $data['nguon_goc'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Loại máy</div>
                                    <div class="value_infoProd"><?= $data['tenLM'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Chất liệu dây</div>
                                    <div class="value_infoProd"><?= $data['tenLD'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Mặt kính</div>
                                    <div class="value_infoProd"><?= $data['matkinh'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Chịu nước</div>
                                    <div class="value_infoProd"><?= $data['chiu_nuoc'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Chức năng khác</div>
                                    <div class="value_infoProd"><?= $data['chuc_nang_khac'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Bảo hiểm</div>
                                    <div class="value_infoProd"><?= $data['bao_hiem'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Bảo hành Quốc tế</div>
                                    <div class="value_infoProd"><?= $data['bao_hanh_QT'] ?></div>
                                </li>
                                <li class="infoProd-item">
                                    <div class="field_infoProd">Giới tính</div>
                                    <div class="value_infoProd"><?php if ($data['gioi_tinh'] == 1) echo "Nam";
                                                                else echo "Nữ" ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="Tab-content_item" id="feedback">
                        <h3>Nhận xét và đánh giá </h3>
                        <div class="_texttarea">
                            <textarea name="comment" id="text_comment" cols="100%" rows="5" placeholder="Viết nhận xét....."></textarea><br>
                            <input type="submit" value="Gửi bình luận" class="btn-comment">
                        </div>
                    </div>
                    <div class="Tab-content_item" id="insurance">
                        <div class="insurance-box">
                            <h3>Bảo hành cả lỗi trong 5 năm</h3>
                            <span>Chi tiết <a href="">http://baohiem.watchtran.vn</a></span>
                        </div>
                        <div class="insurance-address">
                            <h3>Trung tâm bảo hành Watch Tran</h3>
                            <span>- Địa chỉ: Huỳnh Bá Chánh,Hòa Hải,Ngũ Hành Sơn,TP.Đà Nẵng</span><br>
                            <span>- Giờ làm việc: 8h00-21h30(thứ 2 - thứ 6)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.Tab-content_item').hide();
        $('.Tab-content_item:first').fadeIn();
        $('.Tabs-listItem').click(function() {
            $('.Tabs-listItem').removeClass('active');
            $(this).addClass('active');

        })
        $('.Tab-content_item:first').fadeIn();
        $('.Tabs-listItem').click(function() {
            let path = $(this).children('a').attr('href');
            $('.Tab-content_item').hide();
            $(path).fadeIn();
            return false;
        })
        return false;

    })
</script>
<script>
    $(document).ready(function() {
        $('.img-gallery-other img').click(function() {
            $('.img-gallery-other img').removeClass('active_1');
            $(this).addClass('active_1');
        })
    })
</script>