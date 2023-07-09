<?php
require_once("model/promotion.php");

class promotioncontroller
{
    var $model_promotion;
    function __construct()
    {
        $this->model_promotion = new promotion();
    }
    function promotionBybrand()
    {
        $data_brand = $this->model_promotion->get_brand();

        //Lấy loại máy
        $data_machine = $this->model_promotion->get_machine();

        //Lấy loại dây
        $data_wire = $this->model_promotion->get_wire();
        $data_price = $this->model_promotion->ab_price();
        $data_acce = $this->model_promotion->accessory();
        if(isset($_GET['id_th']))
        {
            if(isset($_GET['gt'])){
                $gt = $_GET['gt'];
                $conditionGt = "s.gioi_tinh = $gt AND";
            }else{$conditionGt="";}
            $id = $_GET['id_th'];
            $promo = $_GET['maKM'];
            $link_query = "";
            $field = isset($_GET['field']) ? $_GET['field'] : "";
            $sort =  isset($_GET['sort']) ? $_GET['sort'] : "";
            if (isset($_GET['field']) && isset($_GET['sort'])) {
                $link_query = "ORDER BY $field  $sort";
            }
            $dataProduct = $this->model_promotion->get_promotionBybrand($id,$conditionGt,$promo,$link_query);
            $brand_prod = $this->model_promotion->brand($id);
            
            foreach($dataProduct as $value)
            {
                $pricePromo[$value['idsp']] = $value['gia_sp']-(($value['gia_sp']*$value['giatriKM'])/100);
            }
        }
        require_once("view/index.php");
    }

}

?>