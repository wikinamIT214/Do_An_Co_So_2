<?php
require_once("model/news.php");
class newscontroller
{
    var $model_news;
    public function __construct()
    {
        $this->model_news = new news();
    }
    function news()
    {
         //lấy thương hiệu 
       $data_brand = $this->model_news->get_brand();
      
       //Lấy loại máy
       $data_machine = $this->model_news->get_machine();

       //Lấy loại dây
       $data_wire = $this->model_news->get_wire();

      //Lấy ảnh giới thiệu 
      $anh_gt = $this->model_news->get_anhgt(0,6);
      //Lấy loại shop
      $loaiShop = $this->model_news->loaiShop();
      //Lấy banner
      $banner = $this->model_news->banner();
      $data_acce = $this->model_news->accessory();

      $data_price = $this->model_news->ab_price();
    //   $data_acce = $this->model_news->accessory();
      $newproduct = $this->model_news->get_newProduct();
    
      $dataNews1 = $this->model_news->get_news(0,1);
      $dataNews2 = $this->model_news->get_news(1,5);
      if (isset($_POST['sb_keyword1'])) {
        $search = $_POST['search1'];
        $dataNews = $this->model_news->searchToNews($search);
        $count = count($dataNews);
    }
        require "view/index.php";
    }
}
