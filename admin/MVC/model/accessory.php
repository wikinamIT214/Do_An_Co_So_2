<?php
require_once("model.php");

class Accessory extends model
{
    function list_modelAcce($table,$condition)
    {
        $query = "SELECT * FROM $table ORDER BY $condition DESC";

        require("result.php");

        return $data;
    }
    function add_modelAcce($arr,$table)
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
        header("location:?act=product");
    }
    function delete_modelAcce($id,$table,$condition)
    {
        $query = "DELETE FROM $table WHERE $condition = $id";

        $result = $this->conn->query($query);

        if($result == true){
            setcookie("delete","Xóa thành công",time()+2);
        }else{
            setcookie("delete","Xóa không thành công",time()+2);
        }
    }
    function edit_modelAcce($id,$table,$condition)
    {
        $query = "SELECT * FROM $table WHERE $condition = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
        // require("result.php");

        // return $data;
    }
    function update_modelAcce($arr,$table,$condition)
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
    function get_Acce()
    {
        $query = "SELECT * FROM phukien";

        require("result.php");

        return $data;
    }
}

?>