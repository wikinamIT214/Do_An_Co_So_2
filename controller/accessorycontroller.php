<?php
require_once("model/accessory.php");
class accessorycontroller
{
    var $model_acce;
    public function __construct()
    {
        $this->model_acce = new accessory();
    }
    function accessory()
    {
         //lấy thương hiệu 
       $data_brand = $this->model_acce->get_brand();
      
       //Lấy loại máy
       $data_machine = $this->model_acce->get_machine();

       //Lấy loại dây
       $data_wire = $this->model_acce->get_wire();

      //Lấy ảnh giới thiệu 
      $anh_gt = $this->model_acce->get_anhgt(0,6);
      //Lấy loại shop
      $loaiShop = $this->model_acce->loaiShop();
      //Lấy banner
      $banner = $this->model_acce->banner();
      $data_acce = $this->model_acce->accessory();

      $data_price = $this->model_acce->ab_price();
      $newproduct = $this->model_acce->get_newProduct();
      // if($_GET['gt'] == 1){
      //   $gender = "Nam";
      // }else if($_GET['gt'] == 0){
      //   $gender = "Nữ";
      // }else{$gender = "Cặp đôi";}
        if(isset($_GET['idlpk']))
        {
            $id = $_GET['idlpk'];
            $link_query = "";
            $field = isset($_GET['field']) ? $_GET['field'] : "";
            $sort =  isset($_GET['sort']) ? $_GET['sort'] : "";
            if (isset($_GET['field']) && isset($_GET['sort'])) {
                $link_query = "ORDER BY $field  $sort";
            }
            $dataacc = $this->model_acce->get_accessory($id,$link_query);
            $pathacc = $this->model_acce->pathacc($id);
        }
        require "view/index.php";
    }
}
