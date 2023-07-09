<main id="pageCart">

	<div class="pageLayout">
		<?php if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) { ?>
			<div class="pageLayout_heading">
				<div class="cart_heading constrained">
					<h1>Giỏ hàng</h1>
					<p style="color: red;font-weight:600;"><?= number_format($total, 0, ',', '.') ?>đ</p>
				</div>
			</div>
			<div class="pageLayout_body row " style="margin-left:0px;margin-right:0px;">
				<div class="pageLayout_bodyLeft col " style="padding-right: 0px;">
					<!-- <section> -->
					<?php include "cart_detailInfo.php" ?>
					<!-- </section> -->
				</div>
				<div class="pageLayout_bodyRight col-md-4">
					<?php include "cart_bill.php" ?>
				</div>
			</div>
		<?php }
		if (isset($_SESSION['cart']) && $_SESSION['cart'] == null) { ?>
			<div class="pageLayout_heading">
				<div class="cart_heading constrained">
					<h1>Giỏ hàng</h1>
					<p style="color: red;font-weight:600;"><?= number_format($total, 0, ',', '.') ?>đ</p>
				</div>
				<div class="cart_heading constrained notification">
					<p>Giỏ hàng của bạn hiện đang trống.<a href="?action=home">Quay lại mua hàng</a></p>
				</div>
			</div>
		<?php }
		if (!isset($_SESSION['cart'])) { ?>
			<div class="pageLayout_heading">
				<div class="cart_heading constrained">
					<h1>Giỏ hàng</h1>
					<p style="color: red;font-weight:600;"><?= number_format($total, 0, ',', '.') ?>đ</p>
				</div>
				<div class="cart_heading constrained notification">
					<p>Giỏ hàng của bạn hiện đang trống.<a href="?action=home">Quay lại trang chủ</a></p>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="pageLayout_bottom">
		<div class="constrained pt-4">
			<div class="product-connection">
				<div class="header">
					<h3>Sản phẩm bán chạy</h3>
				</div>
				<div class="product-connection_main">
					<div class="row row-c_m">
						<?php foreach ($data_bestSelling as $value) { ?>
							<div class="col-2 col-4 element-product p-2" style="max-width:250px;">
								<div class="element-prod-wrap">
									<div class="product-img">
										<img src="public/img/product/<?= $value['hinhanh_1'] ?>" alt="">
									</div>
									<div class="info-product pl-3 mt-3">
										<a href="?action=detail&id=<?= $value['idsp'] ?>&id_th=<?= $value['idTH'] ?>&gt=<?= $value['gioi_tinh'] ?>" class="name_prod"><?= $value['ten_sp'] ?></a><br>
										<div class="describe_product">
										<?php if($value['gioi_tinh']==1 ) $gender = "Nam";else if($value['gioi_tinh'] == 0) $gender = "Nu";else $gender = "Cap doi"; ?>
											<span><?= $value['tenTH'] ?></span><span> <?= $gender ?></span>
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
	</div>
	</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		document.getElementById("login").onclick = function() {
			document.getElementById("form_login").style.display = 'block';
		}

	})
</script>