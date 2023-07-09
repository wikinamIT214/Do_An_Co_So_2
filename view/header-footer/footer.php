<section class="mt-5 pt-5">
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3 class="text-center-mobile">Watch|<span>Tran</span></h3>

            <p class="footer-links text-center-mobile">
                <a href="?action=home" class="link-1">Trang chủ</a>

                <a href="?action=thuonghieu&id_th=1">Thương hiệu</a>

                <a href="?action=Nam=&gt=1">Đồng hồ Nam</a>

                <a href="?action=Nu=&gt=0">Đồng hồ Nữ</a>

                <a href="?action=phukien&idlpk=1">Phụ kiện </a>

                <a href="?action=kienthuc">Kiến thức</a>

                <a href="?action=khuyenmai">Khuyến mãi</a>
                <a href="">Tin tức</a>
            </p>

            <p class="footer-company-name">Watch_Tran © 2022</p>
        </div>

        <div class="footer-center">

            <div class="text-center-mobile">
                <i class="fa fa-map-marker"></i>
                <p><span>19,Hòa Hải</span>Ngũ Hành Sơn,Đà Nẵng</p>
            </div>

            <div class="text-center-mobile">
                <i class="fa fa-phone"></i>
                <p>(+84)26460194</p>
            </div>

            <div class="text-center-mobile">
                <i class="fa fa-envelope"></i>
                <p><a href="#" id="email">spwatchtran@gmail.com</a></p>
            </div>
           <div id="form_loginEmail" style="display:none;">
                <?php require_once('view/email/email.php')?>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about text-center-mobile">
                <span>Về Watch_Tran</span>
               Với nhiều năm kinh nghiệm trong lĩnh vực Đồng hồ,Watch_Tran tự hào là Công ty chuyên cung cấp các mẫu đồng hồ chất lượng,những sản phẩm có giá trị tốt cho tất cả người tiêu dùng mà không lo mua phải hàng kém chất lượng
            </p>

            <div class="footer-icons text-center-mobile">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        document.getElementById("email").onclick = function() {
            document.getElementById("form_loginEmail").style.display = 'block';
        }

    })
</script>