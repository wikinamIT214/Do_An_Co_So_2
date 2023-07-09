<main>
    <div class="container-fluid mt-4">
        <div class="page-wrapper">
            <div class="page-body constrained">
                <div class="row">
                    <div class="col main">
                        <div class="form-heading_main">
                            <h1 class="text-center">Đăng ký tài khoản</h1>
                        </div>
                        <hr class="hr">
                        <form action="?action=register" method="POST" id="form_register">
                            <fieldset>
                                <div class="form-layout">
                                    <div class="heading">
                                        <h2>Thông tin chi tiết</h2>
                                    </div>
                                    <div class="field-item float-l">
                                        <label for="lastname" hidden><span>Họ <span>*</span></span></label>
                                        <input type="text" placeholder="Họ" name="lastname" class="" value="<?php if(isset( $lastname)) echo  $lastname;?>" id="last_name">
                                        <small></small>
                                    </div>
                                    <div class="field-item">
                                        <label for="firstname" hidden><span>Tên <span>*</span></span></label>
                                        <input type="text" placeholder="Tên" name="firstname" value="<?php if(isset($firstname)) echo $firstname;?>" id="first_name">
                                        <small></small>
                                    </div>
                                    <div class="field-item float-none">
                                        <label for="gender" hidden><span>Giới tính <span>*</span></span></label>
                                        <select name="gender" id="gender">
                                            <option value="male">Nam</option>
                                            <option value="female">Nữ</option>
                                            <option value="other">Khác</option>
                                        </select>
                                        <small></small>
                                    </div>
                                    <hr class="hr">
                                    <div class="heading">
                                        <h2>Thông tin đăng nhập tài khoản</h2>
                                    </div>
                                    <div class="field-item ">
                                        <label for="username " hidden><span>Tên đăng nhập <span>*</span></span></label>
                                        <input type="text" placeholder="Tên đăng nhập" name="username" value="<?php if(isset($username)) echo $username;?>" id="user_name">
                                        <small></small>
                                    </div>
                                    <div class="field-item">
                                        <label for="email" hidden><span>Địa chỉ email <span>*</span></span></label>
                                        <input type="email" placeholder="Địa chỉ email" name="email" value="<?php if(isset($email)) echo $email;?>" id="email_regis">
                                        <small></small>
                                    </div>
                                    <div class="field-item" style="float: none;">
                                        <label for="phone-number" hidden><span>Số điện thoại</span></label>
                                        <input type="tel" placeholder="Số điện thoại" name="phone_number" value="<?php if(isset($phone_number)) echo $phone_number;?>" id="phone_number">
                                        <small></small>
                                    </div>
                                    <div class="field-item float-l">
                                        <label for="password " hidden><span>Mật khẩu <span>*</span></span></label>
                                        <input type="password" placeholder="Mật khẩu" name="password" id="passwork">
                                        <small></small>
                                    </div>
                                    <div class="field-item">
                                        <label for="aPassword" hidden><span>Nhập lại mật khẩu </span></label>
                                        <input type="password" placeholder="Nhập lại mật khẩu" name="aPassword" id="confirm_passwork">
                                        <small></small>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="register_submit pt-5">
                                <input type="submit" value="Đăng ký" class="register_button" name="register_button">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- <div class="layout-check_rules layout_error">
    <div class="error mb-5"></div>
    <div class="check_rules">
        <input type="checkbox" name="rules" id="">
        <label for="text-rules">
            <span></span>
            <span class="field_label-text">Bạn đã đọc và đồng ý với <a href="">điều khoản</a> và <a href="">điều kiện </a> của <strong>Watch_Tran</strong></span>
        </label>
    </div>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    var lastname  = $('#last_name');
    var firstname  = $('#first_name');
    var gender  = $('#gender');
    var username  = $('#user_name');
    var email  = $('#email_regis');
    var phonenumber  = $('#phone_number');
    var passwork  = $('#passwork');
    var confirm_passwork  = $('#confirm_passwork');
    var form  = $('#form_register');
    
    function showError(input,message)
    {
        let parent = input.parent();
        input.addClass('error')
        parent.find('small').append(message)
        
    }
    function showSuccess(input){
        let parent = input.parent();
        input.removeClass('error');
        parent.find('small').empty()
    }
    //input và list input ở đây là đầu vào chứ không phải input trong form
    function checkEmptyError(listInput){
        let isEmptyError = false;
        listInput.forEach(input => {
            checkValue = input.val()
            if(checkValue == ''){
                showError(input,"Không được để trống");
                isEmptyError = true;
            }
        });
        return isEmptyError;
    }
    function checkEmail(input){
        var emailFormat = /^[a-zA-Z0-9_.+]*[a-zA-Z][a-zA-Z0-9_.+]*@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
        let isEmailError = !emailFormat.test(input.val());
        if(!emailFormat.test(input.val())){
            showError(input,'Email sai cú pháp');
        }else{
            showSuccess(input)
        }
        return isEmailError;
    }
    function checkLenghtError(input,min,max){
        textLength = input.val().length
        if(textLength < min){
            showError(input,`Phải có ít nhất ${min} ký tự`)
            return true;
        }
        if(textLength > max){
            showError(input,`Không được vượt quá ${max} ký tự`)
            return true;
        }
        showSuccess(input)
        return false;
    }
    function checkMathPasswordError(passWord,confirmPassword){
        if(passWord.val() !== confirmPassword.val()){
            showError(confirmPassword,'Mật khẩu không trùng khớp');
        }
        // showSuccess(confirmPassword)
    }

    form.on('submit',function(e){
        e.preventDefault()
        let isEmptyError = checkEmptyError([lastname,firstname,gender,username,email,phonenumber,passwork,confirm_passwork]);
        if(!isEmptyError){
            let isLenghtError = checkLenghtError(lastname,2,10);
            let isEmailError = checkEmail(email);
            let checkMatchPassword = checkMathPasswordError(passwork,confirm_passwork)
       }
    
        
    })
</script>