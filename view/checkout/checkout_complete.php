<!-- <main> -->
    <div class="container-fluid">
        <div class="row page_checkoutComplete">
            <div class="col-12 page-notification">
                <div class="page-notification_Inner">
                    <div class="page-notification_InnerTop">
                        <div class="Icon_complete"><i class="fa-solid fa-check fa-3x Icon"></i></div>
                        <span>Đặt hàng thành công</span>
                    </div>
                    <div class="page-notification_InnerBottom">
                        <p class="Thanks">Cảm ơn bạn đã tin tưởng và đặt hàng với Watch_Tran</p>
                        <p class="Time_shipping">Hàng sẽ được giao cho bạn từ 3-4 ngày</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-ViewBill justify-content-center pt-5">
                <div class="page-ViewBill_Inner col-6">
                    <div class="page-ViewBill_InnerTop">
                        <h3>Hóa đơn</h3>
                    </div>
                    <div class="page-ViewBill_InnerBottom">
                        <div class="NameProduct_bill flex-d justify-content-between">
                            <div class="Product_bill_Lable">Tên sản phẩm</div>
                            <div class="Product_bill_Lable">Giá</div>
                        </div>
                        <?php foreach ($_SESSION['cart'] as $key=>$value) {?>
                        <div class="PriceProduct_bill flex-d justify-content-between">
                            <div class="Product_bill_Value">Đồng hồ <?=$_SESSION['cart'][$key]['Product_name']?></div>
                            <div class="Product_bill_Value"><?=number_format($_SESSION['cart'][$key]['Product_subtotal'],0,',','.')?>đ</div>
                        </div>
                        <?php }?>
                        <div class="PriceProduct_bill flex-d justify-content-between">
                            <div class="Product_bill_Lable">Phí vận chuyển</div>
                            <div class="Product_bill_Value">28.880đ</div>
                        </div>
                        <div class="TotalProduct_bill flex-d justify-content-between">
                            <div class="Product_bill_Lable">Tổng tiền</div>
                            <div class="Product_bill_Value" style="font-weight: 600;"><?=number_format($total+28880,0,',','.')?>đ</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row page-ViewBill justify-content-center pt-5">
                <div class="page-ViewBill_Inner col-6">
                    <div class="page-ViewBill_InnerTop">
                        <h3>Thông tin khách hàng</h3>
                    </div>
                    <div class="page-ViewBill_InnerBottom">
                        <div class="NameProduct_bill flex-d justify-content-between">
                            <div class="Product_bill_Lable">Tên khách hàng</div>
                            <div class="Product_bill_Value"><?=$_SESSION['login']['Ho']." ".$_SESSION['login']['Ten']?></div>
                        </div>
                        <div class="PriceProduct_bill flex-d justify-content-between">
                            <div class="Product_bill_Lable">Địa chỉ email</div>
                            <div class="Product_bill_Value"><?=$_SESSION['login']['diachiemail']?></div>
                        </div>
                        <div class="PriceProduct_bill flex-d justify-content-between">
                            <div class="Product_bill_Lable">Số điện thoại</div>
                            <div class="Product_bill_Value"><?=$_SESSION['login']['sdt']?></div>
                        </div>
                        <div class="TotalProduct_bill flex-d justify-content-between" style="border-top:none;">
                            <div class="Product_bill_Lable">Địa chỉ nhận hàng</div>
                            <div class="Product_bill_Value">Trống</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<!-- </main> -->