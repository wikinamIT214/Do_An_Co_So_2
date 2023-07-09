<?php
require_once("model/shop.php");

class typeShopcontroller
{
    var $model_typeShop;
    function __construct()
    {
        $this->model_typeShop = new shop();
    }
   
}

?>