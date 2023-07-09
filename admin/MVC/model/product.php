<?php
// use LDAP\Result;
require_once("model.php");

class Product extends model
{
    var $table = "sanpham";
    var $condition = "idsp";
    function all_product()
    {
        $query = "SELECT * FROM sanpham ";

        require("result.php");
        
        return $data;
    }
    function detailProduct($id)
    {
        $query = "SELECT t.idTH,t.tenTH,ld.idLD,ld.tenLD,lm.idLM,lm.tenLM ,s.* FROM sanpham AS s,thuonghieu AS t,loaiday AS ld,loaimay AS lm WHERE s.idsp = $id AND s.idTH = t.idTH AND s.idLD = ld.idLD AND s.idLM = lm.idLM";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
        // require("result.php");
        
        // return $data;
    }
    function get_brand()
    {
        $query = "SELECT * FROM thuonghieu";

        require("result.php");

        return $data;
    }
    function get_machine()
    {
        $query = "SELECT * FROM loaimay ";

        require("result.php");

        return $data;
    }
    function get_wire()
    {
        $query = "SELECT * FROM loaiday ";

        require("result.php");

        return $data;
    }
    function get_product($id)
    {
        $query = "SELECT * FROM sanpham WHERE idsp = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
    }
}


?>