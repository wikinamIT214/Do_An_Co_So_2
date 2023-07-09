<?php 
require "model.php";
class checkout extends model
{
    function insert_infoToBill($data)
    {
        // $query = "INSERT INTO hoadon(Ngaytao,nguoinhan,diachi,sodienthoai,tongtien) VALUES('{$data['ngaytao']}','{$data['nguoinhan']}','{$data['diachi']}','{$data['sdt']}','{$data['trangthai']}','{$data['tongtien']}')";
        

        $result = $this->conn->query( "INSERT INTO hoadon(code,Ngaytao,nguoinhan,diachi,sodienthoai,trangthai,tongtien) VALUES('{$data['code']}','{$data['ngaytao']}','{$data['nguoinhan']}','{$data['diachi']}','{$data['sdt']}','{$data['trangthai']}','{$data['tongtien']}')");
    }
    function get_infoToBill()
    {
        $query = "SELECT * FROM hoadon ORDER BY ngaytao DESC LIMIT 1";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
    }
    function insert_infoToBill_detail($data)
    {
        $result = $this->conn->query( "INSERT INTO chitiet_hoadon(MaHD,Masp,code,soluong,Gia) VALUES('{$data['maHD']}','{$data['masp']}','{$data['code']}','{$data['soluong']}','{$data['gia']}')");

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