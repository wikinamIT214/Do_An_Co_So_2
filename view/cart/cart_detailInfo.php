<?php 
	if(isset($_SESSION['cart']))
	{
		foreach($_SESSION['cart'] as $key=>$value){
			
?>
				<div class="cart_infoProd pb-5">
					<div class="row rowLayout">
						<div class="colLayout col-3" style="padding-right: 0px;padding-left:0px;">
							<div class="productGallery">
								<a href="">
									<img src="public/img/product/<?=$value['Product_image']?>" alt="">
								</a>
							</div>
						</div>
						<div class="col cartEntry_detail">
							<a href="">
								<div class="cartEntry_heading">
									<h2 class="heading-main"><?=$value['Product_name']?></h2>
									<p class="heading-subtitle"><?=$value['Product_brand']?></p>
								</div>
							</a>
							<div class="Cart-infoDetail" id="product-detailInfo">
								<div class="Cart-infoDetail">
									<div class="Cart-lable">Size mặt</div>
									<div class="Cart-info"><?=$value['Product_size'].'mm'?></div>
								</div>
								<div class="Cart-infoDetail">
									<div class="Cart-lable">Số lượng</div>
									<form action="index.php?action=cart&handle=updateCart" method="post" class="flex-d">
										<div class="Cart-info">
											<input type="number" min=1 name="qtn[<?=$value['Product_id']?>]" id="" value="<?=$value['Product_quantity']?>" style="width:35px;">
										</div>
										<?php if(isset($_COOKIE['notifi'])) {?>
										<div class="notification rounded ml-3" style="padding:3rem 0rem 0rem 0rem">
											<span style="font-size: 13px;color:red">Thông báo </span><span style="font-size: 13px;color:red;"><?=$_COOKIE['notifi'] ?></span>
										</div>
										<?php }?>
								</div>
								<div class="Cart-infoDetail">
									<div class="Cart-lable Price_1">Giá</div>
									<div class="Cart-info"><?=number_format($value['Product_subtotal'],0,',','.')?>đ</div>
								</div>
								<div class="Cart-infoDetail">
									<div class="Cart-title">
										<span>Chưa áp dụng giảm giá.Áp dụng mã giảm giá nếu có</span>
									</div>
									
								</div>
							</div>
							<div class="Cart-toggle">
								<div class="LayoutTonggle">
										<div class="Cart-update">
											<button type="submit" name="update" value="<?=$value['Product_id']?>">Cập nhật</button>
										</div>
									</form>
									<div class="Cart-delete">
										<a href="?action=cart&handle=deleteCart&id_sp=<?=$value['Product_id']?> ">Xóa</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php } }?>