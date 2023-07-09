<div class="Layout Bill_layout">
    <div class="border-box bill_main">
        <div class="border-box_heading">
            <div class="bill_heading">
                <h2>Hóa đơn</h2>
            </div>
        </div>
        <!-- <form action="?action=checkout&handle=listCheckout" method="post"> -->
        <div class="border-box_body bill_body">
            <div class="bill_item">
                <div class="subtotal">
                    <div class="bill_label">Tổng tiền(tạm tính)</div>
                    <div class="bill_value"><?= number_format($total, 0, ',', '.') ?>đ</div>
                </div>
                <div class="item_number">
                    <?php $countProduct = 0;
                    foreach ($_SESSION['cart'] as $value) { ?>
                        <?php $countProduct += $value['Product_quantity'] ?>
                    <?php } ?>
                    <span><?= $countProduct ?> sản phẩm</span>
                </div>
            </div>
            <div class="bill_item">
                <div class="shipping">
                    <div class="bill_label">Vận chuyển</div>
                        <div class="bill_value ">
                            <div class="bill_value" style="text-align:end;">28.800đ</div>
                        </div>
                </div>
                <div class="bill_item">
                    <div class="disccounts">
                        <div class="bill_label">Giảm giá</div>
                        <div class="bill_value">0.00VNĐ</div>
                    </div>
                    <div class="enter_disccount">
                        <a href="">Mã giảm giá</a>
                    </div>
                </div>
                <div class="bill_item">
                    <div class="shipping">
                        <div class="bill_label">VAT</div>
                        <div class="bill_value">0.00VNĐ</div>
                    </div>
                </div>
                <?php if($countProduct >=4) { $totalMoney =  number_format($total + 28000, 0, ',', '.')?>
                    <div class="bill_value" style="text-align:end;padding:10px 0px;"><?= number_format($total + 28800, 0, ',', '.') ?>đ</div>
                    <div class="bill_value" style="text-align:end;">- 28.800đ</div>
                <?php }else{?>
                <?php }?>
                <div class="bill_item" style="border-bottom:none;">
                    <div class="estimsted_total">
                        <div class="bill_label">Tổng tiền</div>
                        <?php if($countProduct >=4) {?>
                            <div class=""></div>
                            <div class="bill_value"><?= number_format($total, 0, ',', '.') ?>đ</div>
                        <?php }else{?>
                        <div class="bill_value"><?= number_format($total + 28800, 0, ',', '.') ?>đ</div>
                        <?php }?>
                    </div>
                    <div class="learn_more">
                        <p>Mua từ 4 sản phẩm sẽ được miễn phí vận chuyển</p>
                        <a href="">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div></div>
        </div>

        <div class="border-box bill_checkout">
            <p>Bắng cách nhấn vào thanh toán hoặc thanh toán khác,đồng nghĩa với bạn đồng ý với <a href="">Điều khoản sử dụng <i class="fa-solid fa-arrow-up-right-from-square"></i> và quyền riêng tư <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
            <div id="button_checkout">
                <?php if (isset($_SESSION['login'])) { ?>
                    <div class="col button_checkoutSubmit">
                        <form action="?action=checkout&handle=listCheckout" method="post">
                            <button type="submit" class="button_checkout_1"><span>Thanh toán</span></button>
                        </form>
                    </div>
                <?php } else { ?>
                    <div class="col button_loginSubmit">
                        <a href="#" id="login_button">
                            <span>Đăng nhập</span>
                        </a>
                    </div>
                <?php } ?>
                <div class="divider">OR</div>
                <div class="col">
                    <button type="button" class="button_checkout_2">
                        <span>Thanh toán với thẻ ghi nơ/thẻ tín dụng</span>
                    </button>
                </div>
                <div class="col" id="card_type-list">
                    <p>Thanh toán với:</p>
                    <div class="card_type-list flex-d">
                        <div><img src="public/img/logo-napas.png" alt="napas" style="width:50px;"></div>
                        <div><img src="public/img/logo-visa.jpg" alt="visa" style="width:45px;"></div>
                        <div><img src="public/img/logo-mastercard.png" alt="mastercard" style="width:40px;"></div>
                        <div><img src="public/img/logo-jcb.png" alt="jcb" style="width: 45px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            document.getElementById("login_button").onclick = function() {
                document.getElementById("form_login").style.display = "block";
            }

        })
    </script>