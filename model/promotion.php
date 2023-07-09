<?php
require_once("model.php");

class promotion extends model
{
    function get_promotionBybrand($id,$gt,$promo,$link_query)
    {
        $query = "SELECT t.*,km.*,s.* FROM thuonghieu AS t,sanpham AS s,khuyenmai AS km WHERE s.khuyenMai = km.maKM AND s.idTH = $id AND s.idTH=t.idTH AND $gt s.khuyenMai LIKE '%".$promo."%'  $link_query";

        require("result.php");

        return $data;
    }
}

?>