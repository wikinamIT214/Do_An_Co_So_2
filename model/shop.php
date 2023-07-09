<?php
require('model.php');
class shop extends model
{
    function dataProduct($where_gioitinh, $idth, $idlm, $idld, $link_query,$begin)
    {
        $query = "SELECT t.idTH,t.tenTH ,s.* FROM sanpham AS s,thuonghieu AS t WHERE $where_gioitinh s.idTH = t.idTH AND (s.idTH = $idth OR s.idLM = $idlm OR s.idLD = $idld )  limit $begin,8 ";

        require("result.php");

        return $data;
    }
    function phantrangSanpham($where_gioitinh, $idth, $idlm, $idld, $link_query)
    {
        $query = "SELECT t.idTH,t.tenTH ,s.* FROM sanpham AS s,thuonghieu AS t WHERE $where_gioitinh s.idTH = t.idTH AND (s.idTH = $idth OR s.idLM = $idlm OR s.idLD = $idld ) $link_query ";

        $data = mysqli_query($this->conn,$query);

        $result = mysqli_num_rows($data);

        return $result;
    }
    function get_ProductFlPrice($gt, $a, $b,$begin)
    {
        $query = "SELECT t.idTH,t.tenTH,s.* FROM sanpham as s,thuonghieu as t WHERE t.idTH = s.idTH AND gioi_tinh = $gt AND gia_sp >= $a AND gia_sp <= $b limit $begin,8";

        require("result.php");

        return $data;
    }
    function phantrangPrice($gt, $a, $b)
    {
        $query = "SELECT t.idTH,t.tenTH,s.* FROM sanpham as s,thuonghieu as t WHERE t.idTH = s.idTH AND gioi_tinh = $gt AND gia_sp >= $a AND gia_sp <= $b ";

        require("result.php");

        return $data;
    }
    function get_productgender($gt,$begin)
    {
        $query = "SELECT t.*,s.* FROM sanpham AS s,thuonghieu AS t WHERE s.gioi_tinh = $gt AND t.idTH = s.idTH "; 

        require("result.php");

        return $data;
    }
    function get_ProductFLCat($link,$link_query,$begin)
    {
        $query = "SELECT t.*,s.* FROM sanpham AS s,thuonghieu AS t WHERE s.idTH = t.idTH  $link $link_query limit $begin,8";

        require("result.php");

        return $data;
    }
    function phantrangCat($link,$link_query)
    {
        $query = "SELECT t.*,s.* FROM sanpham AS s,thuonghieu AS t WHERE s.idTH = t.idTH  $link $link_query";

        $data = mysqli_query($this->conn,$query);

        $result = mysqli_num_rows($data);
        
        return $result;
    }
    
}
