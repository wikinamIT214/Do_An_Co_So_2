<?php
require_once("model.php");
class homeAdmin extends model
{
    function Recent_order()
    {
        $query = "SELECT DISTINCT ct.Masp,ct.soluong,h.trangthai ,s.* FROM sanpham AS s,chitiet_hoadon AS ct,hoadon AS h WHERE ct.Masp=s.idsp ";

        require('result.php');

        return $data;
    }

}

?>