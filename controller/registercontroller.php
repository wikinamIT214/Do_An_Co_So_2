<?php
require "model/register.php";
class registercontroller
{
    var $model_register;
    function __construct()
    {
        $this->model_register = new register();
    }
    function create_account()
    {
        //lấy thương hiệu 
       $data_brand = $this->model_register->get_brand();
      
       //Lấy loại máy
       $data_machine = $this->model_register->get_machine();

       //Lấy loại dây
       $data_wire = $this->model_register->get_wire();

      //Lấy ảnh giới thiệu 
      $anh_gt = $this->model_register->get_anhgt(0,6);
      //Lấy loại shop
      $loaiShop = $this->model_register->loaiShop();
      //Lấy banner
      $banner = $this->model_register->banner();
      $data_acce = $this->model_register->accessory();

      $data_price = $this->model_register->ab_price();
      $newproduct = $this->model_register->get_newProduct();



        if(isset($_POST['register_button'])){
        $infoAcconut =  $this->model_register->get_account();
        foreach($infoAcconut as $value)
        {
            $mail = $value['diachiemail'];
            $usn = $value['tendangnhap'];
            $phone = $value['sdt'];
        }
        if(isset($_POST["lastname"]) && isset($_POST["firstname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["phone_number"]) && isset($_POST["password"]) && isset($_POST["aPassword"]) ){
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $username = $_POST['username'];
            // $gender = $_POST['']
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password'];
            $maquyen = "2";
            if($_POST["lastname"] != '' && $_POST["firstname"] != '' && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["phone_number"] != '' && $_POST["password"] != '' && $_POST["aPassword"] != ''  ){
                $this->model_register->dangky($lastname, $firstname, $username, $email, $password, $phone_number,$maquyen);
                header('location:?action=home');
            }else{
                header("location:?action=register");
            }
        }
        
    }
        require_once('view/index.php');
    }
}

