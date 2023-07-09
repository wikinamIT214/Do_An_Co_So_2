<?php 
require_once("model.php");
class promotion extends model
{
    var $table = "khuyenmai";
    var $condition = "stt";
    function get_Promo($id)
    {
        $query = "SELECT * FROM khuyenmai WHERE stt = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
    }
    function getBrand()
    {
        $query = "SELECT * FROM thuonghieu";

        require("result.php");

        return $data;
    }
}

?>