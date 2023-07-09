<?php
require_once "model/login.php";
class logincontroller{
    var $model_login;
    var $conn;
   function __construct()
   {
        $this->model_login = new Login();
        $conn_obj = new connect;
        $this->conn = $conn_obj->conn;
   }
   function login()
   {
     if(isset($_POST['login'])){
          $username = $_POST['username'];
          $password = $_POST['password'];
          if (strpos($username, "'") != false) {
               $username = str_replace("'", "\'", $username);
           }
           $data = array(
               'username'=>$username,
               'password'=>$password
           );
          $data_1 = $this->model_login->check_Login($data);
          if($data_1['tendangnhap'] == $username){
               if(password_verify($password,$data_1['matkhau']) == $password){
                    if($data_1 != null){
                         if($data_1['Ma_quyen']  == 1){
                              $_SESSION['admin'] = true;
                              $_SESSION['admin'] = $data_1;
                         }else if($data_1['Ma_quyen']  == 2){
                              $_SESSION['login'] = true;
                              $_SESSION['login'] = $data_1;
                         }
                         
                    }
                    header("location:?action=home");
               }else{
                    setcookie('login','Mật khẩu đăng nhập không đúng',time()+6);
                    header("location:index.php#");
               }
          }else{
               setcookie('login','Tên đăng nhập không đúng',time()+6);
               header("location:index.php#");
          }
          // header("location:?action=home");
     }
   }
   function logout()
     {
          if(isset($_SESSION['login']))
          {
               unset($_SESSION['login']);
          }else if(isset($_SESSION['admin'])){
               unset($_SESSION['admin']);
          }
          header("location:?action=home");
     }
}
