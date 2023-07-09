<?php
require "model.php";
class Login extends model{
    function check_Login($data)
    {
        $query = "SELECT * FROM nguoidung WHERE tendangnhap = '" . $data['username'] . "'";

        return  $result = $this->conn->query($query)->fetch_assoc();
        
        
       
    }
}
    
?>