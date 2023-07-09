<?php
require('model.php');
class accessory extends model{
    function get_accessory($id,$link_query)
    {
        $query = "SELECT c.*,p.* FROM chitietphukien AS c,phukien AS p WHERE c.idlpk = $id AND c.idlpk=p.idlpk $link_query";

        require("result.php");

        return  $data;
    }
    function pathacc($id)
    {
        $query = "SELECT * FROM phukien  WHERE idlpk = $id";

        $result = $this->conn->query($query)->fetch_assoc();

        return $result;
    }
}
?>