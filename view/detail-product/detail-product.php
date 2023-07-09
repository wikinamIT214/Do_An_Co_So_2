<main>
    <div class="constrained">
        <nav class="c-path">
            <form action="?action=cart&handle=addCart" method="post">
                <ol>
                    <li><a href="?action=home">Trang chủ</a></li>
                        <input type="hidden" value="">
                        <input type="hidden" name="Product_id" value="<?=$detail_prod['idsp']?>">
                        <input type="hidden" name="Product_name" value="<?=$detail_prod['ten_sp']?>">
                        <input type="hidden" name="Product_price" value="<?=$detail_prod['gia_sp']?>">
                        <input type="hidden" name="Product_image" value="<?=$detail_prod['hinhanh_1']?>">
                        <input type="hidden" name="Product_quantity" value="1">
                        <input type="hidden" name="Product_brand" value="<?=$detail_prod['tenTH']?>">
                        <input type="hidden" name="Product_size" value="<?=$detail_prod['sizemat']?>">
                        <li><span>&nbsp; > Đồng hồ </span><?= $detail_prod['ten_sp'] ?></li>
                    
                </ol>
        </nav>
    </div>
    <div class="page-body_1 constrarined " style="margin-left:1.5rem;margin-right : 1.5rem;">
        <div class="row bg" style="margin-left:auto;margin-right:auto;">
            <div class="main col-md-8">
                <div class="product-header">
                    <button type="button" class="iconbutton">
                        <span><i class="fa-regular fa-heart"></i></span>
                    </button>
                </div>
                <div class="product-gallery">
                    <div class="img-gallery pt-7">
                        <div class="img-gallery-main ">
                            <div class="main-img text-center">                              
                                    <img src="public/img/product/<?= $detail_prod['hinhanh_1'] ?>" alt="" style="max-width:300px;" id="main-img">                               
                            </div>
                        </div>
                        <div class="img-gallery-other text-center pt-5">                          
                                <img class="active_1" src="public/img/product/<?= $detail_prod['hinhanh_1'] ?>" alt="" id="1" width="75px" onclick="changeImg(1)">
                                <img src="public/img/product/<?= $detail_prod['hinhanh_2'] ?>" alt="" id="2" width="75px" onclick="changeImg(2)">
                                <img src="public/img/product/<?= $detail_prod['hinhanh_3'] ?>" alt="" id="3" width="75px" onclick="changeImg(3)">                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 frames-detail " style="padding-left:0px;padding-right:0px">
                <div class="info-product-wrap ">
                    <div class="product-detail--header">
                        <div class="heading product-name">
                            <h1 class="d-grid">
                                    <span style="font-weight:600;font-size:34px;">Đồng hồ
                                        <span style="font-weight:600;font-size:34px;color:#487eb0;" class="name_product"><?= $detail_prod['ten_sp'] ?></span></span>
                                    <span style="font-weight:600;font-family:roboto;" class="name_brand"><?= $detail_prod['tenTH'] ?></span>
                                    <span style="font-size: 15px;text-transform:none;padding:7px 5px;font-weight:600;font-family:roboto;"><?php if ($detail_prod['gioi_tinh'] == 1) echo "Nam";
                                                                                                                                            else echo "Nữ"; ?></span>
                            </h1>
                        </div>
                    </div>
                    <div class="shows">
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="write-review-container" type="button">
                            <button class="btn-write">
                                Viết đánh giá
                            </button>
                        </div>
                    </div>
                    <div class="ProductPrice">
                        
                            <span><?= number_format($detail_prod['gia_sp'],0,',','.') ?> VNĐ</span>
                    </div>
                    <div class="text-Fundiin">Hoặc ~ <strong>trả góp 3 kỳ </strong> <span>Fundiin</span><a href=""> Tìm hiểu(?)</a></div>
                    <div class="productstatus">
                        <div class="circle"><span style="font-size: 15px;font-weight:600"><i class="fa-solid fa-check " style="color: red;"></i></span></div>
                        <span style="font-size: 15px;font-weight:600">Trạng thái: <?= $status ?></span>
                    </div>
                    <ul class="transaction-wrap">
                        <li class="shipping__promotion-element ">
                            <div class="shiptouser_outer">
                                <span class="icon_shipping"><i class="fa-solid fa-truck-fast" style="font-size: 20px;"></i></span>
                                <div class="shiptouser_inner">
                                    <span style="font-weight:600">Giao hàng</span>
                                    <span style="font-size: 14px;">Giao hàng đến bạn từ 3-4 ngày</span>
                                </div>
                            </div>
                            <div class="dividing-line">AND</div>
                            <div class="promotion_outer">
                                <div class="heading_promotion">Khuyến mãi</div>
                                <div class="element-promotion">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <span>Trả góp 0%:Mua đồng hồ với 333.000đ</span>
                                    <br>
                                    <a href="" style="margin-left:14px;" class="ct">Chi tiết</a>
                                </div>
                                <div class="element-promotion">
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <span>Tặng gói bảo hiểm 2.000.000 </span>
                                    <br>
                                    <a href="" style="margin-left:10px;" class="ct">Chi tiết</a>
                                </div>
                            </div>
                        </li>
                        <li class="btn-add__cart">
                            <?php if($check_quantityInCart == 0) {$check = 0;}else{$check=1;}?>
                            <input type="hidden" name="" class="check_quantity" data-check_quantityincart="<?=$check?>" data-check_quantityInDB="<?=$status?>">
                            <input type="submit" class="add_cart" name="addToCart" value="Thêm vào giỏ hàng" >
                        </li>
                        <li class="btn-checkout">
                            <button type="button" class="checkout">Mua hàng</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="constrained pt-5">
        <div id="ProductTabs" class="Tabs">
            <div class="Tabs-button">
                <ul class="Tabs-list">
                    <li class="Tabs-listItem active" style="width:125px"><a href="#detail">Chi tiết</a></li>
                    <li class="Tabs-listItem " style="width: 270px;"><a href="#feedback" class="flex-d">
                        <div class="flex-d">
                            <div>Đánh giá</div>
                            <?php if($checkReview == 1){?>
                            <div class="ml-3">
                                <span >
                                    <ul class="flex-d">
                                        <?php for($i=1;$i<=5;$i++){
                                            $averageRating+= count($this->model_detail->getRating($_GET['id'],$i))*$i;
                                            ?>
                                            <li><i class="fa-sharp fa-solid fa-star numberstarRating<?=$i?>" data-index="<?=$i?>" style="font-size:14px;"></i></li>
                                        <?php }?>
                                    </ul> 
                                </span>
                            </div>
                            <div class="ml-2">
                                <span>(<?=$countRate?>)</span>
                            </div>
                        <?php }else{?>
                            <div class="ml-3">
                                <span >
                                    <ul class="flex-d">
                                        <?php for($i=1;$i<=5;$i++){?>
                                        <li><i class="fa-sharp fa-solid fa-star numberstar<?=$i?>" data-index="<?=$i?>" style="font-size:14px;"></i></li>
                                        <?php }?>
                                    </ul> 
                                </span>
                            </div>
                            <div class="ml-2">
                                <span>(0)</span>
                            </div>
                        <?php }?>
                        </div>
                    </a></li>
                    <li class="Tabs-listItem" style="width:215px"><a href="#insurance">Chế độ bảo hành</a></li>
                </ul>
            </div>
            </form>
            <div class="Tab-content ">
                <div class="Tab-content_item" id="detail">
                    <h3>Chi tiết sản phẩm</h3>
                    <div class="tb">
                        <table>
                            <tr>
                                <th>Nhãn hiệu</th>
                                <th>Nguồn gốc</th>
                                <th>Loại máy</th>
                                <th>Chất liệu dây</th>
                                <th>Mặt kính</th>
                                <th>Chịu nước</th>
                                <th>Chức năng khác</th>
                                <th>Bảo hiểm</th>
                                <th>Bảo hành quốc tế</th>
                                <th>Giới tính</th>
                            </tr>
                            <tr>
                                <td><?= $detail_prod['tenTH'] ?></td>
                                <td><?= $detail_prod['nguon_goc'] ?></td>
                                <td><?=$detail_prod['tenLM']?></td>
                                <td><?=$detail_prod['tenLD']?></td>
                                <td><?= $detail_prod['matkinh'] ?></td>
                                <td><?= $detail_prod['chiu_nuoc'] ?></td>
                                <td><?= $detail_prod['chuc_nang_khac'] ?></td>
                                <td><?= $detail_prod['bao_hiem'] ?></td>
                                <td><?= $detail_prod['bao_hanh_QT'] ?></td>
                                <td><?php if ($detail_prod['gioi_tinh'] == 1) echo "Nam";else echo "Nữ" ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php if($checkReview == 1){?>
                    <div class="Tab-content_item" id="feedback">
                    <div class="flex-d align-items-center justify-content-between" id="feedback-header">
                        <h3>Đánh giá sản phẩm</h3>
                        <div class="mr-5">
                            <?php if($check == 0){?>
                                <button class="button_review">
                                <a href="#review" id="review">Viết đánh giá</a>
                                </button>
                            <?php }?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="showRating p-4 col-6" >
                            <div class="avageRating-header">
                                <h4 style="text-transform:none;font-size:18px;padding:10px 0px;">Xếp hạng nhanh</h4>
                            </div>
                            <?php for($i=5;$i>=1;$i--){?>
                            <div class="showRating-item flex-d align-items-center " style="margin:7px 0px;">
                                <div class="item1 flex-d align-items-baseline">
                                    <span class="" style="font-size: 15px;"><?=$i?></span>
                                    <p style="margin-bottom:0px;"><i class="fa-sharp fa-solid fa-star" style="font-size:11px;color:#545454;"></i></p>
                                </div>
                                <div class="item2 ml-2 mr-4 rounded crossbar" style="width:250px;height:10px;background-color:#d5d4d4;">
                                <?php $rt =count($this->model_detail->getRating($_GET['id'],$i))?>
                                    <div id="rate<?=$i?>" data-totalRating="<?=$countRate?> " data-countRating="<?=$rt?>"></div>
                                </div>
                                <div class="item3">
                                    <span style="font-size: 15px;"><?php echo count($this->model_detail->getRating($_GET['id'],$i))?></span>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-6 p-4">
                            <div class="avageRating-header">
                                <h4 style="text-transform:none;font-size:18px;padding:10px 0px;">Xếp hạng trung bình</h4>
                            </div>
                            <div class="avageRating-main mt-5">
                                <div class="flex-d align-items-baseline overall ">
                                    <div class="overall-header mr-4"><span>Tổng thể sản phẩm</span></div>
                                   <div class="mr-5">
                                    <span >
                                        <ul class="flex-d">
                                            <?php for($i=1;$i<=5;$i++){
                                            $rt +=count($this->model_detail->getRating($_GET['id'],$i))*$i;?>
                                                <li><i class="fa-sharp fa-solid fa-star numberstar<?=$i?>" data-index="<?=$i?>" style="font-size:14px;"></i></li>
                                                
                                            <?php }?>
                                        </ul>
                                        </span>
                                   </div>
                                   <div>
                                        <span class="star" data-star="<?=round($rt/$countRate)?>"><?=round($rt/$countRate)?></span>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <?php if($countRate > 4){?>
                            <div class="divideReview">
                            <h3>1 - 10 của <?=$countRate?> Đánh giá</h3>
                        </div>
                        <?php }?>
                    </div>
                    <div class="p-4 pt-5 showReview">
                        <div class="row justify-content-end">
                        <?php foreach($data as $value){?>  
                            <div class="col-md-12">
                                 <div class="userName_review">
                                    <p><?=$value['tenCmt']?></p>
                                </div>
                                <div class="mt-4 numberStar_review flex-d align-items-center">
                                    <span >
                                        <ul class="flex-d">
                                            <?php for($i=1;$i<=5;$i++){
                                                $averageRating+= count($this->model_detail->getRating($_GET['id'],$i))*$i;
                                                ?>
                                                <li><i class="fa-sharp fa-solid fa-star numberstar<?=$i?>" data-index="<?=$i?>" style="font-size:14px;"></i></li>
                                            <?php }?>
                                        </ul>
                                    </span>
                                    <?php $thoigian = $value['thoigian']?>
                                    <span class="ml-4"><?=$thoigian?></span>
                                </div>
                                <div class="reviewTitle">
                                    <p><?=$value['tieude']?></p>
                                </div>
                                    <div class="content_review mt-4">
                                    <p><?=$value['comment']?></p>
                                    <?php if($value['hinhanh_1'] != ""){?>
                                        <span style="font-weight: 600;">Hình ảnh</span>
                                        <div class="row pt-3">
                                            <div class="col-md-4 mr-2 mt-2" style="border:1px solid #959494;">
                                                <img src="public/img/review/<?=$value['hinhanh_1']?>" alt="" width="100px">
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>  
                        </div>      
                    </div>
                </div>
                <?php }else{?>
                    <div class="Tab-content_item" id="feedback">
                    <div class="flex-d align-items-center justify-content-between" id="feedback-header">
                        <h3>Đánh giá</h3>
                    </div>
                    <div class="pt-5 pl-3">
                        <ul class="flex-d align-items-center">
                            <?php for($i=1;$i<=5;$i++){?>
                                <li><span><i class="fa fa-star" style="color: #b7b4b4;font-size:13px;"></i></span></li>
                            <?php }?>
                        </ul>
                    </div>
                    <button class="button_review">
                        <a href="#review" id="review">Trở thành người đánh giá đầu tiên</a>
                    </button>
                    </div>
                <?php }?>
                <div class="form-comment" style="display:none;" id="showReview">
                        <?php require('view/comment/comment.php')?>
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
    <div class="constrained pt-4">
        <div class="product-connection">
            <div class="header">
                <h3>Sản phẩm liên quan</h3>
            </div>
            <div class="product-connection_main">
                <div class="row row-c_m">
                    <?php foreach ($prod_connection as $value) { ?>
                        <div class="col-2 col-4 element-product p-2" style="max-width:250px;">
                            <div class="element-prod-wrap">
                                <div class="product-img">
                                    <img src="public/img/product/<?= $value['hinhanh_1'] ?>" alt="">
                                </div>
                                <div class="info-product pl-3 mt-3">
                                    <a href="?action=detail&id=<?= $value['idsp'] ?>&id_th=<?=$value['idTH']?>&gt=<?=$value['gioi_tinh']?>" class="name_prod"><?= $value['ten_sp'] ?></a><br>
                                    <div class="describe_product">

                                        <span><?= $value['tenTH'] ?></span><span> <?=$gender?></span>
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
<script>
    function show_formReview(){
        document.getElementById('review').onclick = function(e){
        e.preventDefault();
        document.getElementById('showReview').style.display = "block";
        $('.overlay').css('display','block');
        $('.overlay').click(function(){
            $(this).css('display','none');
            $('#showReview').css('display','none');
        })
        }
    }
    function showRating(){
        //code xếp hạng nhanh(số đánh giá sao)
        for(var i=1;i<=5;i++)
       {
            var count = $('#rate'+i).data('countrating');
            var totalRating = $('#rate'+i).data('totalrating');
            var averageRating = (count/totalRating)*250;
            $('#rate'+i).width(averageRating);
            $('#rate'+i).height(10);
            $('#rate'+i).css('background-color','#666666');
            $('#rate'+i).css('border-radius','3px');
       }
    }
    function check_QuantityProduct(){
        //QuantityInDB với 0 là hết hàng 1 là còn hàng
        var QuantityInCart = $('.check_quantity').data('check_quantityincart');
        var QuantityInDB = $('.check_quantity').data('check_quantityindb');
        if(QuantityInCart == 1 || QuantityInDB == 0){
            alert(QuantityInDB)
            $('.add_cart').css('color','#8d8d8d');
            $('.add_cart ').css('background-color','#fbfbfb');
            $('.add_cart').css('border','1px solid grey');
            $('.add_cart').attr('disabled','disabled');
        }
        if(QuantityInDB === 0){
            alert(QuantityInDB)
            $('.checkout').css('color','#8d8d8d')
            $('.checkout ').css('background-color','#fbfbfb')
            $('.checkout').css('border','1px solid grey');
            $('.checkout').attr('disabled','disabled');
        }
    }
    function toCheckout(){
        $('.checkout').click(function(){
            window.location = "?action=checkout";
        })
    }
    function starAverage(){
         //code màu cho số sao trung bình
        var average = $('.star').data('star');
        for(var i=1;i<=5;i++)
        {
            var index_1 = $('.numberstar'+i).data('index');
            var index_2 = $('.numberstarRating'+i).data('index');
            if(average >= index_1){
                $('.numberstar'+i).css('color','#666666');
                $('.numberstarRating'+i).css('color','#e50505');
            }else{
                $('.numberstar'+i).css('color','#d5d4d4');
                $('.numberstarRating'+i).css('color','#d5d4d4');
            }
        }
    }
    show_formReview();
    showRating();
    check_QuantityProduct();
    toCheckout();
    starAverage();
</script>