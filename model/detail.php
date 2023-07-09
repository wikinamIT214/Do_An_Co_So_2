<?php
    require_once "model.php";
    class detail extends model{
        function detail_sp($id){
            
        
            $result = $this->conn->query("SELECT t.tenTH,d.tenLD,m.tenLM,s.* FROM loaiday AS d,loaimay AS m, thuonghieu AS t, sanpham AS s WHERE s.idsp = $id AND s.idTH = t.idTH AND s.idLD = d.idLD AND s.idLM = m.idLM");

            return $result->fetch_assoc();
        }
        function qtyProduct($id){
            $query = "SELECT So_luong FROM sanpham WHERE idsp = $id";

            $result = $this->conn->query($query);

            return $result->fetch_assoc();
        }
        function insertReview($arr)
        {
            $a = "";
            $b = "";
            foreach($arr as $key => $value){
                $a .=$key.",";
                $b .="'".$value."',"; 
            }
            $a = trim($a,',');
            $b = trim($b,',');
            $result = $this->conn->query("INSERT INTO review($a) VALUES($b)");
        }
        function Review()
        {
            $query = "SELECT DISTINCT id_sp FROM review";

            require('result.php');

            return $data;
        }
        function getReview($id)
        {
            $query = "SELECT * FROM review WHERE id_sp = $id";

            require('result.php');

            return $data;
        }
        function getRating($id,$rating)
        {
            $query = "SELECT rating FROM review WHERE id_sp = $id AND rating = $rating";

            require('result.php');

            return $data;
        }
        
        
       
    }

?>