<?php
require "model/home.php";
class HomeController{
   var $model_Home;
   function __construct()
   {
        $this->model_Home = new Home();
   }
   function list_danhmuc()
   {
       //lấy thương hiệu 
       $data_brand = $this->model_Home->get_brand();
      
       //Lấy loại máy
       $data_machine = $this->model_Home->get_machine();

       //Lấy loại dây
       $data_wire = $this->model_Home->get_wire();

      //Lấy ảnh giới thiệu 
      // $anh_gt = $this->model_Home->get_anhgt(0,6);
      //Lấy loại shop
      $loaiShop = $this->model_Home->loaiShop();
      //Lấy banner
      $banner = $this->model_Home->banner();
      $data_acce = $this->model_Home->accessory();

      $data_price = $this->model_Home->ab_price();
      $newproduct = $this->model_Home->get_newProduct();
    require "view/index.php";
   }
   
}

?>