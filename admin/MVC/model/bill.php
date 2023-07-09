<?php
require_once("model.php");
class bill extends model
{
    var $table = "hoadon";
    var $condition = "MaHD";
    function get_detailBill($id)
    {
        $query = "SELECT c.*,s.*,h.* FROM chitiet_hoadon AS c,sanpham AS s,hoadon AS h WHERE c.MaHD = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
    }
    function status($id)
    {
        $query = "SELECT * FROM hoadon WHERE trangthai = $id ORDER BY Ngaytao DESC";

        require("result.php");

        return $data;
    }
}
?>