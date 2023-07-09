<div class="overlay" style="z-index: 9998;"></div>
    <div class="form-wrap" style="z-index: 9999;">
        <div class="form-heading">
            <h3 class="loginHeading">Đăng nhập</h3>
            <a href="?action=home" class="cancel" ><i class="fa-solid fa-xmark fa-2x" style="font-size: 25px;margin-bottom:10px;"></i></a>
        </div>
        <div class="form-inner">
            <form action="?action=account&handle=login" method="POST">
                <div class="emailForm">
                    <label for="username" class="title_form-1" >Tên đăng nhập</label>
                    <input type="text" class="input_form-1" name="username" style="font-size: 16px;">
                </div>
                <div class="passwordForm">
                    <label for="password" class="title_form-2">Mật khẩu</label>
                    <input type="password" class="input_form-2" name="password" style="font-size: 16px;">
                </div>
                <div class="forgetForm">
                    <button class="forgetPass">
                        <span>Quên mật khẩu</span>
                    </button>
                </div>
                <ul class="button">
                    <li class="creater_account"><a href="?action=register">Tạo tài khoản</a></li>
                    <li class="login">
                        <button type="submit" name="login">Đăng nhập</button>
                        <!-- <div class="overlay_login"></div> -->
                    </li>
                    
                </ul>
            </form>
        </div>
    </div>
<!-- </label> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('.emailForm input').click(function(){
            $('.title_form-1').addClass('active_form-1');
        })
    })
    $(document).ready(function(){
        $('.passwordForm input').click(function(){
            $('.title_form-2').addClass('active_form-2');
        })
    })
</script>