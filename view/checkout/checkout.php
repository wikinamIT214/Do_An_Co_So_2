<main id="main">
    <div class="PagePath_wrap">
        <div class="PagePath_inner">
            <div class="Path_main">
                <span class="flex-d align-items-baseline">
                    <a href="?action=home" class="text-transform-none">Trang chủ </a>
                    <p>&nbsp; > Thanh toán</p>
                </span>
            </div>
        </div>
    </div>
    <div class="pageLayout constrained">
        <form action="index.php?action=checkout&handle=save" method="post">
            <div class="pageLayout_shippingInfo">
                <div class="wrapper_shippingInfo">
                    <input type="hidden" name="nameToOrder" value="<?php echo $_SESSION['login']['Ho'] . " " . $_SESSION['login']['Ten']; ?>">
                    <input type="hidden" name="phoneToOrder" value="<?= $_SESSION['login']['sdt'] ?>">
                    <!-- <input type="hidden" name=""> -->
                    <div class="lable_shippingInfo flex-d align-items-center ">
                        <p><i class="fa-solid fa-location-dot"></i></p>
                        <p style="margin-bottom:16px;margin-left:5px;">Địa chỉ nhận hàng</p>
                    </div>
                    <div class="shippingInfo flex-d align-items-center justify-content-between">
                        <div class="main_shippingInfo flex-d align-items-center">
                            <div class="Name_shippingInfo mr-3"><?php echo $_SESSION['login']['Ho'] . " " . $_SESSION['login']['Ten']; ?></div>
                            <div class="phone_shippingInfo mr-3">(+84)<?= $_SESSION['login']['sdt'] ?></div>
                            <?php if (isset($_SESSION['login']['diachi'])) { ?>
                                <div class="address_shippingInfo mr-3"><?= $_SESSION['login']['diachi'] ?></div>
                            <?php } else { ?>
                                <div class="address_shippingInfo mr-3">Địa chỉ nhận hàng</div>
                            <?php } ?>
                        </div>
                        <?php if (isset($_SESSION['login']['diachi'])) { ?>
                            <div class="toggleAddress" id="toggleAddress">
                                <a href="#">Thay đổi</a>
                            </div>
                        <?php } else { ?>
                            <div class="toggleAddress" id="toggleAddress">
                                <a href="#">Nhập địa chỉ</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="pageLayout_product">
                <div class="wrapper_layoutProduct">
                    <div class="infoProduct_lable flex-d justify-content-between">
                        <div class="Product_lable">
                            <p class="Product">Sản phẩm</p>
                        </div>
                        <div class="ProductField_lable flex-d ">
                            <div class="Price_field productField">
                                <p>Giá tiền</p>
                            </div>
                            <div class="qty_field productField">
                                <p>Số lượng</p>
                            </div>
                            <div class="total_field productField">
                                <p>Thành tiền</p>
                            </div>
                        </div>
                    </div>
                    <div class="infoProduct_content ">
                        <?php if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $value) { ?>
                                <div class="infoProduct_contentInner flex-d justify-content-between ">
                                    <div class="Product_content flex-d align-items-center">
                                        <div class="ProductImg mr-5">
                                            <img src="public/img/product/<?= $value['Product_image'] ?>" alt="" style="max-width:50px;">
                                        </div>
                                        <div class="ProductName flex-d align-items-center">
                                            <div class="Name"><?= $value['Product_name'] ?></div>
                                            <div class="Brand">Thương hiệu: <?= $value['Product_brand'] ?></div>
                                        </div>
                                    </div>
                                    <div class="ProductField_content flex-d align-items-center">
                                        <div class="Price_field Price productField">
                                            <p style="font-weight: 500;color:black;"><?= number_format($value['Product_price'], 0, ',', '.') ?>đ</p>
                                        </div>
                                        <div class="qty_field productField">
                                            <p style="font-weight: 500;color:black;"><?= $value['Product_quantity'] ?></p>
                                        </div>
                                        <div class="total_field productField">
                                            <p style="font-weight: 500;color:black;"><?= number_format($value['Product_subtotal'], 0, ',', '.') ?>đ</p>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
                <div class="unit_shipping  justify-content-end">
                    <div class="unit_shipping-left mr-7r">
                        <div class="lable_UnitShipping mr-5r">
                            <p>Đơn vị vận chuyển :</p>
                        </div>
                        <div class="value_UnitShipping mr-5r">
                            <p style="color: black;">Chuyển phát nhanh</p>
                            <p style="color: grey;font-size:14px;">
                                Nhận hàng vào <?php echo $newdate_1 . " - "  . $newdate_2 ?>
                            </p>
                        </div>
                    </div>
                    <div class="UnitShipping_amount">
                        <p>28.880đ</p>
                    </div>
                </div>
                <!-- <div class="totalAmout_inclshipping">
                    tổng tiền
            </div> -->
            </div>
            <div class="pageLayout_checkout">
                <div class="wrapper_layoutCheckout">
                    <div class="top_checkout">
                        <p>Thanh toán</p>
                    </div>
                    <div class="bottom_checkout">
                        <div class="check_bill">
                            <div class="product_total flex-d justify-content-end">
                                <div class="total_lable">
                                    Tổng tiền hàng
                                </div>
                                <div class="total_value">
                                    <?= number_format($total, 0, ',', '.') ?>đ
                                </div>
                            </div>
                            <div class="shipping_fee flex-d justify-content-end">
                                <div class="shipping_lable">
                                    Phí vận chuyển
                                </div>
                                <?php $countProduct = 0;
                                    foreach ($_SESSION['cart'] as $value) { ?>
                                    <?php $countProduct += $value['Product_quantity']; 
                                        if($countProduct >=4){
                                            $money = - 28800;
                                        }else{$money = 28800;}
                                    ?>
                                    <?php } ?>
                                <div class="shipping_value">
                                    <?=number_format($money,0,',','.')?>đ
                                </div>
                            </div>
                            <div class="checkout_total flex-d justify-content-end align-items-center">
                                <div class="checkout_lable">
                                    Tổng tiền thanh toán
                                </div>
                                <div class="checkout_value" style="font-size: 25px;color:red;font-weight:500;">
                                    <?php if($money > 0) {?>
                                    <?= number_format($total + 28000, 0, ',', '.') ?>đ
                                    <?php }else{?>
                                        <?= number_format($total, 0, ',', '.') ?>đ
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="overlay" id="Address_1" style="display:none;"></div>
                        <div id="Address" style="display:none;" class="Address">
                            <div class="insertAddress_wrap  justify-content-center">
                                <div class="insertAddress_inner ">
                                    <div class="headingADD">
                                        <h3>Địa chỉ của tôi</h3>
                                    </div>
                                    <?php if (isset($_SESSION['login']['diachi'])) { ?>
                                        <div class="addressRemember flex-d">
                                            <p style="font-weight:600">Địa chỉ hiện tại: </p>
                                            <p><?= $_SESSION['login']['diachi'] ?></p>
                                        </div>
                                    <?php } ?>
                                    <div class="insertAddress_toggle Tabs_listItem" id="toggleAddress_1">
                                        <a href="#" class="address_icon" id="toggleAddress_1"><i class="fa-light fa-plus "></i></a>
                                        <a href="#" class="address_toggleADD" id="toggleAddress_1">Thay đổi địa chỉ </a>
                                    </div>
                                    <div class="insertAddress_entry" id="Address_2" style="display:none;">
                                        <input type="text" name="XHTP" value="" placeholder="Phường/Xã - Quận/Huyện - Thành Phố/Tỉnh">
                                        <input type="text" name="DCCT" value="" placeholder="Địa chỉ cụ thể">
                                    </div>
                                    <div class="buttonAddress">
                                        <a href="#" id="pageBack">Trở lại</a>
                                        <button type="submit" name="address_submit">Hoàn tất</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_end">
                            <div class="wrapper_checkoutEnd flex-d align-items-center justify-content-between">
                                <div class="rules_checkout"><span>Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý với. <a href=""> Điều khoản Watch_tran</a></span></div>
                                <button type="submit" name="button_order">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- <div class="overlay"></div> -->
    </div>
    <!-- <form action="?action=checkout&handle=save" method="post">
    
        </form> -->
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        document.getElementById("toggleAddress").onclick = function() {
            document.getElementById("Address").style.display = 'block';
            document.getElementById("Address_1").style.display = 'block';
        }
        return false;
    })
    $(document).ready(function() {
        document.getElementById("pageBack").onclick = function() {
            document.getElementById("Address").style.display = 'none';
            document.getElementById("Address_1").style.display = 'none';
        }
        return false;
    })
    $(document).ready(function() {
        $('#toggleAddress_1').click(function(){
            $('#Address_2').toggle(500);
        })
        return false;
    })
</script>