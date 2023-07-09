<?php
require_once('connect.php');

class model 
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connect;
        $this->conn = $conn_obj->conn;
    }
    function get_brand()
    {
        $query = "SELECT * FROM thuonghieu";

        require "result.php";

        return $data;
    }
    function get_machine()
    {
        $query = "SELECT * FROM loaimay ";

        require "result.php";

        return $data;
    }
    function get_wire()
    {
        $query = "SELECT * FROM loaiday ";

        require "result.php";

        return $data;
    }
    function brand($id_th)
    {
        $query = "SELECT * FROM thuonghieu  WHERE idTH = $id_th ";

        require('result.php');

        return $data;
    }
    function product_connection($id_th,$gt)
    {
        $query = "SELECT t.tenTH,s.* FROM thuonghieu AS t, sanpham AS s WHERE s.idTH = t.idTH AND s.idTH = $id_th AND s.gioi_tinh = $gt limit 1,5";
        
        require ("result.php");

        return $data;
    }
    function get_newProduct()
    {
        $query = "SELECT * FROM sanpham ORDER BY thoigian_them DESC limit 0,6";

        require ("result.php");

        return $data;
    }
    // function get_anhgt($a,$b)
    // {
    //     $query = "SELECT * FROM anh_gt limit $a,$b";

    //     require ("result.php");

    //     return $data;
    // }
    function loaiShop()
    {
        $query = "SELECT * FROM loaiShop ORDER  BY idLS DESC";

        require ("result.php");

        return $data;
    }
    function banner()
    {
        $query = "SELECT * FROM banner ORDER BY thoigian limit 2";

        require ("result.php");

        return $data;
    }
    function ab_price()
    {
        $query = "SELECT * FROM khoanggia";

        require("result.php");

        return $data;
    }
    function get_abPrice($id){
        $query = "SELECT gt_1,gt_2 FROM khoanggia WHERE idKG = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
    }
    function accessory()
    {
        $query = "SELECT * FROM phukien ";

        require("result.php");

        return $data;
    }
    function search_keyword($keyword)
    {
        $query = "SELECT km.giatriKM,t.idTH,t.tenTH,s.* FROM thuonghieu AS t,khuyenmai AS km,sanpham AS s  WHERE s.khuyenMai = km.maKM AND s.idTH = t.idTH AND s.ten_sp LIKE '%" . $keyword . "%'";

        require("result.php");

        return $data;
    }
    function bestSelling()
    {
        $query = "SELECT DISTINCT cthd.Masp,t.*,s.* FROM chitiet_hoadon as cthd,sanpham as s,thuonghieu as t  WHERE cthd.Masp = s.idsp AND t.idTH = s.idTH";

        require('result.php');

        return $data;
    }
    function quantityProduct($id)
    {
        $query = "SELECT So_luong FROM sanpham WHERE idsp = $id";

        $result = $this->conn->query($query)->fetch_array();

        return $result;
    }
    
}
?>