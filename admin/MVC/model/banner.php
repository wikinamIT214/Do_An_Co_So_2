<?php
require_once("model.php");
class banner extends model
{
    function list_banner($table)
    {
        $query = "SELECT * FROM $table ";

        require("result.php");

        return $data;
    }
    function add_banner($table,$arr)
    {
        $a = "";
        $b = "";
        foreach($arr as $key=>$value){
            $a .=$key.",";
            $b .="'".$value."',"; 
        }
        $a = trim($a , ",");
        $b = trim($b , ",");
        $result = $this->conn->query("INSERT INTO $table($a) VALUES ($b)");
        // header("location:?act=product");
    }
    function detailCat($table,$condition,$id)
    {
        $query = "SELECT * FROM $table WHERE $condition = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
    }
    function deleteCat($table,$condition,$id)
    {
        $query = "DELETE FROM $table WHERE $condition = $id";

        $result = $this->conn->query($query);

        if($result == true){
            setcookie("delete","Xóa thành công",time()+2);
        }else{
            setcookie("delete","Xóa không thành công",time()+2);
        }
    }
    function updateCat($table,$condition,$arr)
    {
        $v = "";
        foreach ($arr as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $query = "UPDATE $table SET  $v   WHERE $condition = " . $arr[$condition];

        $result = $this->conn->query($query);
        if($result == true)
        {
            setcookie("update","Sửa thành công",time()+2);
        }else{
            setcookie("update","Sửa không thành công",time()+2);
        }
    }
}
?>