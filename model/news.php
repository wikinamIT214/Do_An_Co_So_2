<?php
require('model.php');
class news extends model{
    function get_news($a,$b)
    {
        $query = "SELECT * FROM tintuc ORDER BY thoigianthem DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function searchToNews($keyword)
    {
        $query = "SELECT * FROM tintuc WHERE tentt LIKE '%".$keyword."%'";

        require("result.php");

        return $data;
    }
}
?>