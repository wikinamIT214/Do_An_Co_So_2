<?php 
require_once('model.php');

class sort extends model
{
    function sort($array){
        foreach($array as $value){
            $max = 0;
            if($value['gia_sp'] > $max){
                $max = $value['gia_sp'];
            }; 
        }
    }
}

?>