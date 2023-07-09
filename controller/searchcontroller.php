<?php 
require('model/search.php');
class searchController
{
    var $model_search;
    function __construct()
    {
        $this->model_search = new search();
    }
    function search_nameProduct(){
         if (isset($_POST['action']) ) {
            $search = $_POST['search_name'];
            $dataProduct = $this->model_search->search_keyword($search);
            $value_search = "";
            foreach($dataProduct as $value){
               if($search){
                $value_search .='
                    <li>
                    <a href="?action=detail&id='.$value['idsp'].'&id_th='.$value['idTH'].'&gt='.$value['gioi_tinh'].'">
                        <div class="row flex-d">
                            <div class="col-1">
                                <a href="?action=detail&id='.$value['idsp'].'&id_th='.$value['idTH'].'&gt='.$value['gioi_tinh'].'"><img src="public/img/product/'.$value['hinhanh_1'].'" alt="" style="width:35px;"></a>
                            </div>
                            <div class="col-11 flex-d align-items-center">
                                <div class="product_name mr-4">
                                    <a href="?action=detail&id='.$value['idsp'].'&id_th='.$value['idTH'].'&gt='.$value['gioi_tinh'].'">Đồng hồ '.$value['ten_sp'].'</a>
                                </div>
                                <div class="product_brand mr-4">
                                    <p>Thương hiệu '.$value['tenTH'].'</p>
                                </div>
                                <div class="product_price mr-4">
                                    <p>'.number_format($value['gia_sp'],0,',','.').'đ</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </li>
                ' ;
               }else if($search != $value['ten_sp']){
                $value_search = '
                <li>Không có kết quả nào được tìm thấy</li>
                ';
               }
            }
            $count = count($dataProduct);
            echo $value_search;
            

        }
        // require "view/index.php";
    }
}

?>