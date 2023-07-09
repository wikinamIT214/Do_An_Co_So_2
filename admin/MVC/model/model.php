<?php 
require_once("connection_Admin.php");
class model
{
    var $conn;
    var $table;
    var $condition;
    function __construct()
    {
        $connObj = new connections_Ad();
        $this->conn = $connObj->conn;

    }
    function List()
    {
        $query = "SELECT * FROM $this->table ORDER BY $this->condition DESC";

        require("result.php");

        return $data;
    }
    function detail($id)
    {
        $query = "SELECT * FROM $this->table WHERE $this->condition = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
        // require("result.php");

        // return $data;
    }
    function add($arr)
    {
        $a = "";
        $b = "";
        foreach($arr as $key=>$value){
            $a .=$key.",";
            $b .="'".$value."',"; 
        }
        $a = trim($a , ",");
        $b = trim($b , ",");
        $result = $this->conn->query("INSERT INTO $this->table($a) VALUES ($b)");
        header("location:?act=product");
    }
    function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE $this->condition = $id";

        $result = $this->conn->query($query);

        if($result == true){
            setcookie("delete","Xóa thành công",time()+2);
        }else{
            setcookie("delete","Xóa không thành công",time()+2);
        }
    }
    function update($arr)
    {
        $v = "";
        foreach ($arr as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $this->table SET  $v   WHERE $this->condition = " . $arr[$this->condition];

        $result = $this->conn->query($query);
        if($result == true)
        {
            setcookie("update","Sửa thành công",time()+2);
        }else{
            setcookie("update","Sửa không thành công",time()+2);
        }
    }
    function brandAD()
    {
        $query = "SELECT * FROM thuonghieu ";

        require("result.php");

        return $data;
    }
    // function promotion()
    // {
    //     $query = "SELECT *  FROM khuyenmai ";

    //     require("result.php");

    //     return $data;
    // }
    function vn_str_filter ($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
       }
		return $str;
    }
}

?>