<?php
require "model.php";
class register extends model{

    var $conn;
    function __construct()
    {
            $conn_obj = new connect();
            $this->conn = $conn_obj->conn;
    }
    function get_account()
    {
        $query = "SELECT * FROM nguoidung";
        
        require "result.php";

        return $data;
    }
    function dangky($lastname,$firstname,$username,$email,$password,$phone_number,$maquyen)
    {
        
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $query = $this->conn->query("INSERT INTO nguoidung(Ho,Ten,tendangnhap,diachiemail,matkhau,sdt,Ma_quyen) VALUES('{$lastname}','{$firstname}','{$username}','{$email}','{$pass}','{$phone_number}','{$maquyen}')");
            setcookie('dk','Đăng ký thành công',time()+2);
            echo "Đăng ký thành công";
        

    }
}
?>
