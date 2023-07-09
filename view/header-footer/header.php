
<header>
    <nav class="c-header-ribbon flex-end align-right">
        <div class="c-header-ribbon__item flex">
            <!-- <div class="wrapper-connect"> -->
            <div class="login_logout">
                <?php if (isset($_SESSION['login'])) { ?>
                    <a href="#" id="login">
                        <p>Xin chào, <?php echo $_SESSION['login']['Ho'] . " " . $_SESSION['login']['Ten'] ?></p>
                    </a>
                    <div class="view_account">
                        <div class="Account_main">
                            <a href="">Tài khoản của tôi</a>
                        </div>
                        <div class="logout">
                            <a href="?action=account&handle=logout">Đăng xuất</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['admin'])) { ?>
                    <div class=" Tabs-listItem_1">
                        <a href="#" id="login">
                            <p>Xin chào,Admin</p>
                        </a>
                    </div>
                    <div class="view_account">
                        <div class="Account_main">
                            <a href="admin/?act=admin">Đến trang admin</a>
                        </div>
                        <div class="logout">
                            <a href="?action=account&handle=logout">Đăng xuất</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['admin'])) { ?>
                    <div class=" Tabs-listItem_1">
                        <a href="admin/?act=admin" id="login">
                            <p>Xin chào,Nhân viên</p>
                        </a>
                    </div>
                    <div class="view_account">
                        <div class="Account_main">
                            <a href="">Tài khoản của tôi</a>
                        </div>
                        <div class="logout">
                            <a href="?action=account&handle=logout">Đăng xuất</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <a href="#form_login" id="login">
                        <p>Xin chào,Đăng nhập</p>
                    </a>
            </div>
            <div class="Tab-content_item_1" style="display:none" id="form_login">
                <?php
                   include('view/login/login.php');
                ?>
            </div>
        <?php } ?>
        </div>
        </div>
    </nav>
    <nav class="c-header__main nav-lg row row--always m-0 align-items-center ">
       <div class="col-md-2  c-header__logo c-header__logo-desktop">
            <a href="?action=home">
                <div class="wrapprer-logo">
                    <div class="logo">
                        <strong>WATCH TRAN</strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-7 HeaderNavigation HeaderNavigation-desktop" >
            <div class="HeaderNavigation-item">
                <a href="?action=home" class="HeaderNavigation-link"><i class="fa fa-home" aria-hidden="true"></i></a>
            </div>
            <div class="HeaderNavigation-item">
                <a href="#" class="HeaderNavigation-link">Thương hiệu</a>
                <div class="child_menu-brand">
                    <div class="sub-menu-brand">
                        <?php $i = 1;
                        foreach ($data_brand as $value) { ?>
                            <div class="wrapper-img">
                                <a href="?action=thuonghieu&id_th=<?= $i ?>" id="click_check">
                                    <img src="public/img/<?= $value['hinhanh'] ?>" alt="">
                                </a>
                            </div>
                        <?php $i++;
                        } ?>
                    </div>
                </div>
            </div>
            <div class="HeaderNavigation-item">
                <a href="#" class="HeaderNavigation-link">Nam</a>
                <div class="child_menu">
                    <div class="container" style="display:flex;">
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Thương hiệu</p>
                            </div>
                            <hr>
                            <?php foreach ($data_brand as $value) { ?>
                                <p><a href="?action=Nam&gt=1&dm=thuonghieu&id_th=<?= $value['idTH'] ?>" id="click_check"><?= $value['tenTH'] ?></a></p>
                            <?php } ?>
                        </div>
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Bộ máy</p>
                            </div>
                            <hr>
                            <?php foreach ($data_machine as $value) { ?>
                                <p><a href="?action=Nam&gt=1&dm=bomay&idlm=<?= $value['idLM'] ?>"><?= $value['tenLM'] ?></a></p>
                            <?php } ?>
                        </div>
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Loại dây</p>
                            </div>
                            <hr>
                            <?php foreach ($data_wire as $value) { ?>
                                <p><a href="?action=Nam&gt=1&dm=loaiday&idld=<?= $value['idLD'] ?>"><?= $value['tenLD'] ?></a></p>
                            <?php } ?>
                        </div>
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Giá</p>
                            </div>
                            <hr>
                            <?php foreach ($data_price as $value) { ?>
                                <p><a href="?action=Nam&gt=1&idkg=<?= $value['idKG'] ?>"><?= $value['khoangGia'] ?></a></p>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="HeaderNavigation-item">
                <a href="#" class="HeaderNavigation-link">Nữ</a>
                <div class="child_menu" style="left:-353px">
                    <div class="container" style="display:flex;">
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Thương hiệu</p>
                            </div>
                            <hr>
                            <?php foreach ($data_brand as $value) { ?>
                                <p><a href="?action=Nu&gt=0&dm=thuonghieu&id_th=<?= $value['idTH'] ?>"><?= $value['tenTH'] ?></a></p>
                            <?php } ?>
                        </div>
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Bộ máy</p>
                            </div>
                            <hr>
                            <?php foreach ($data_machine as $value) { ?>
                                <p><a href="?action=Nu&gt=0&dm=Loaimay&idlm=<?= $value['idLM'] ?>"><?= $value['tenLM'] ?></a></p>
                            <?php } ?>
                        </div>
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Loại dây</p>
                            </div>
                            <hr>
                            <?php foreach ($data_wire as $value) { ?>
                                <p><a href="?action=Nu&gt=0&dm=Loaiday&idld=<?= $value['idLD'] ?>"><?= $value['tenLD'] ?></a></p>
                            <?php } ?>
                        </div>
                        <div class="sub-menu">
                            <div class="title_sub-menu">
                                <p>Giá</p>
                            </div>
                            <hr>
                            <?php foreach ($data_price as $value) { ?>
                                <p><a href="?action=Nu&gt=0&idkg=<?= $value['idKG'] ?>"><?= $value['khoangGia'] ?></a></p>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="HeaderNavigation-item">
                <a href="" class="HeaderNavigation-link">Phụ kiện</a>
                <div class="child_menu" style="left:-50px; width:300px;">
                    <div class="container" style="display:flex;">
                        <div class="sub-menu">
                            <?php foreach ($data_acce as $value) { ?>
                                <p><a href="?action=phukien&idlpk=<?= $value['idlpk'] ?>"><?= $value['loaipk'] ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="HeaderNavigation-item">
                <a href="?action=kienthuc" class="HeaderNavigation-link">Kiến thức</a>
                <div class="child_menu" style="left:-50px; width:200px;">
                    <div class="container" style="display:flex;">
                        <div class="sub-menu">
                            <p><a href="?action=kienthuc">Tư vấn đồng hồ</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="HeaderNavigation-item">
                <a href="" class="HeaderNavigation-link">Khuyến mãi</a>
                <div class="child_menu" style="left:-50px; width:500px;">
                    <div class="container" style="display:flex;">
                        <?php for ($i = 0; $i <= 1; $i++) { ?>
                            <div class="sub-menu ml-5">
                                <div class="title_sub-menu">
                                    <p><?php if ($i == 1) echo "Nam";
                                        else echo "Nữ"; ?></p>
                                </div>
                                <hr>
                                <?php foreach ($data_brand as $value) { ?>
                                    <p><a href="?action=khuyenmai&id_th=<?= $value['idTH']?>&gt=<?=$i?>&maKM=<?=$value['khuyenmai']?>"><?= $value['tenTH'] ?></a></p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 c-header__icon-container c-header__icon-container-desktop">
            <div class="wrapper_search" id="wrapper_search">
                <div class="search">
                        <input type="text" id="search_name" placeholder="Tìm kiếm tại đây..."class="" autocomplete="off">
                        <button type="submit" id="submit_search">
                            <i class="fa fa-search"></i>
                        </button>
                </div>
                <div class="value_search">
                    <ul class="list-group" id="output_search">
        
                    </ul>
                </div>
            </div>
            <div class="wrapper_cart"><a href="?action=cart&handle=listCart"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:white"></i></a></div>
            <div class="product_number">
                <?php if (isset($_SESSION['cart'])) {
                    // bắt đầu xử lý cho phần số sp trong giỏ hàng
                    $count = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $count++;
                    }
                    // Kết thúc xử lý cho phần số sp trong giỏ hàng
                    echo $count;
                } ?>
            </div>
        </div>

        <!-- nav-mobile -->
        <div class="col-md-3 col-4 c-header__logo c-header__logo-mobile">
            <a href="?action=home">
                <div class="wrapprer-logo">
                    <div class="logo">
                        <strong>WATCH TRAN</strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-8 col-7 c-header__icon-container-mobile">
            <div class="wrapper_search" id="wrapper_search">
                    <div class="search">
                        <form action="?action=shop" method="post">
                            <input type="search" name="search" placeholder="Tìm kiếm tại đây...">
                            <button type="submit" name="sb_keyword" style="border-radius:4px;"><i class="fa fa-search " style="--fa-secondary-color:black" aria-hidden="true"></i></button>
                        </form>
                    </div>
            </div>
            <div class="icon_search text-right">
                <span><i class="fa fa-search" style="color: white;"></i></span>
            </div>
        </div>
        <div class="col-md-1 col-1 c-header__cart-container-mobile ">
            <div class="wrapper_cart"><a href="?action=cart&handle=listCart"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:white"></i></a></div>
                <div class="product_number">
                    <?php if (isset($_SESSION['cart'])) {
                        // bắt đầu xử lý cho phần số sp trong giỏ hàng
                        $count = 0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $count++;
                        }
                        // Kết thúc xử lý cho phần số sp trong giỏ hàng
                        echo $count;
                    } ?>
             </div>
             <div class="Navigation-toggle ml-4 mr-2">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
             </div>
        </div>
        <!-- <div class="col-md-9 c-header__icon-container c-header__icon-container-mobile">
            <div class="wrapper_search" id="wrapper_search">
                <div class="search">
                    <form action="?action=shop" method="post">
                        <input type="search" name="search" placeholder="Tìm kiếm tại đây...">
                        <button type="submit" name="sb_keyword" style="border-radius:4px;"><i class="fa fa-search " style="--fa-secondary-color:black" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="wrapper_cart"><a href="?action=cart&handle=listCart"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:white"></i></a></div>
            <div class="product_number">
                <?php if (isset($_SESSION['cart'])) {
                    // bắt đầu xử lý cho phần số sp trong giỏ hàng
                    $count = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $count++;
                    }
                    // Kết thúc xử lý cho phần số sp trong giỏ hàng
                    echo $count;
                } ?>
            </div>
        </div> -->
    </nav>
    <!-- <nav class="c-header__main nav-mobile row">
        <div class="col-md-3 c-header__logo">
            <a href="?action=home">
                <div class="wrapprer-logo">
                    <div class="logo">
                        <strong>WATCH TRAN</strong>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-9 c-header__icon-container">
            <div class="wrapper_search" id="wrapper_search">
                <div class="search">
                    <form action="?action=shop" method="post">
                        <input type="search" name="search" placeholder="Tìm kiếm tại đây...">
                        <button type="submit" name="sb_keyword" style="border-radius:4px;"><i class="fa fa-search " style="--fa-secondary-color:black" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="wrapper_cart"><a href="?action=cart&handle=listCart"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:white"></i></a></div>
            <div class="product_number">
                <?php if (isset($_SESSION['cart'])) {
                    // bắt đầu xử lý cho phần số sp trong giỏ hàng
                    $count = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $count++;
                    }
                    // Kết thúc xử lý cho phần số sp trong giỏ hàng
                    echo $count;
                } ?>
            </div>
        </div>
    </nav> -->
    </div>
</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">
   function fadeIn_formLogin(){
        $('#login').click(function(e){
            e.preventDefault();
            $('#form_login').css('display','block');
        })
        return false;
   }
    $(document).ready(function(){
            document.getElementById("click_check").onclick = function(){
            document.getElementById("checkbox1").checked = "true";
        }
    })
    fadeIn_formLogin()
</script>
<script>
    function ajaxSearch(){
        var action = "search";
        $('#search_name').keyup(function(){
            var search_name = $('#search_name').val();
            $.ajax({
                type:"post",
                url:"?action=search",
                data:{action:action,search_name:search_name},
                success:function(data){
                    $('#output_search').html(data);
                    $('.list-group').css('width','1037px');
                    $('#output_search').css('height','400px');
                    $('#output_search').css('overflow-y','scroll');
                }
            });
        })
    }
    function remove_ajaxSearch(){
        $('#search_name').click(function(){
            $('.list-group').css('width','0px');
                    $('#output_search').css('height','0px');
        });
    }
    function inputSearch(){
        search_name = $('#search_name');
        $('#search_name').click(function(){
            $('.c-header__icon-container-desktop').toggleClass('col-md-10')
            $('.HeaderNavigation-desktop').toggleClass('d-none')
            $('.wrapper_search').toggleClass('w-95')
            $('#search_name').toggleClass('w-95')          
        })
        return true;
    }
    function enterSearch(){
        $('#search_name').keypress(function(event){
        var search_name = $('#search_name').val();
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            // var a = $.post("?action=shop",{search_name:search_name})
                window.location.href = "?action=shop&search="+search_name;
        }
    });
    }
    function buttonSearch(){
        $('#submit_search').click(function(){
            var search_name = $('#search_name').val();
            window.location.href = "?action=shop&search="+search_name;
        })
    }
    var input_search = inputSearch();
    ajaxSearch();
    enterSearch();
    buttonSearch();
    if(input_search){
        remove_ajaxSearch();
    }
</script>