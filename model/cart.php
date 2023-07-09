<?php
require('model.php');
class Cart extends model{
    function detail_sp($id) {
    $query = "SELECT * FROM sanphamnam WHERE idSP = $id";
    $result = $this->conn->query($query);
    return $result->fetch_assoc();
    // require("result.php");
    // return $data;
    }
    public function checkGender($gt){
        if($gt == 1){
            $gender = "Nam";
        }else if($gt == 0)
        {
            $gender = "Nữ";
        }else{
            $gender = "Cặp đôi";
        }
        return $gender;
    }
    function quantityProduct($id)
    {
        $query = "SELECT So_luong FROM sanpham WHERE idsp = $id";

        $result = $this->conn->query($query)->fetch_array();

        return $result;
    }
    function updateQuantity($id,$soluong)
    {
        $query = "UPDATE sanpham SET So_luong = $soluong WHERE idsp = $id";

        $result = $this->conn->query($query);
        if($result){
            echo "Thành công";
        }else{echo "Thất bại";}

    }
}
?>