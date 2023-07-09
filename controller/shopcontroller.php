<?php
require('model/shop.php');
class shopController
{
    var $model_shop;
    function __construct()
    {
        $this->model_shop = new shop();
    }
    function dataShop()
    {
        $data_brand = $this->model_shop->get_brand();

        //Lấy loại máy
        $data_machine = $this->model_shop->get_machine();

        //Lấy loại dây
        $data_wire = $this->model_shop->get_wire();
        $data_price = $this->model_shop->ab_price();
        $data_acce = $this->model_shop->accessory();

        if (isset($_GET['gt'])) {
            //kiểm tra và chuyển đổi  lấy giới tính về
            $gt = $_GET['gt'];
            if ($gt == 1) {$gender = "Nam";} 
            else if ($gt == 0) {$gender = "Nữ";
            } else { $gender = "Cặp đôi";}
        }
    //Lọc sản phẩm
            $link_query = "";
            $field = isset($_GET['field']) ? $_GET['field'] : "";
            $sort =  isset($_GET['sort']) ? $_GET['sort'] : "";
            if (isset($_GET['field']) && isset($_GET['sort'])) {
                $link_query = "ORDER BY s.$field  $sort";
            }             
     //Bắt đầu tạo đường dẫn
            if(isset($_GET['id_th'])){ $idth = $_GET['id_th'];$th = "AND s.idTH = $idth";
                $path1 = "=".$_GET['id_th'];$namePath1 = "&id_th";
            }else{$path1 = "";$namePath1 = "";$idth=0;$th="";}
            if(isset($_GET['idld'])){$idld = $_GET['idld'];$ld = "AND s.idLD = $idld";  
                $path2 = "=".$_GET['idld'];$namePath2 = "&idld";
            }else{$ld = "";$path2 = "";$namePath2 = "";$idld=0;$ld ="";}
            if(isset($_GET['idlm'])){$idlm = $_GET['idlm'];$lm = "AND s.idLM = $idlm";  
                $path3 ="=". $_GET['idlm'];$namePath3 = "&idlm";
            }else{$lm = "";$path3 = "";$namePath3 = "";$idlm=0;$lm="";}
            if(isset($_GET['gt']) && $_GET['gt'] != null){$gt = $_GET['gt'];$gioitinh = "AND s.gioi_tinh = $gt";$gt1 = "gt=$gt";
            }else{ $gioitinh = "";$gt1 = "";$gt="";}
            if(isset($_GET['idkg'])){$path4 ="=". $_GET['idkg'];$namePath4 = "&idkg";
            }else{$path4 = "";$namePath4 = "";}
            if(isset($_GET['page'])){
                $pagelk = "=".$_GET['page'];$namePagelk = "&page";}
            else{$pagelk = "";$namePagelk = "";}
    //Kết thúc tạo đường dẫn 

    
//=========================== Phần chung được đưa lên trên =========================== 
    //Lấy sản phẩm theo loại shop
    $start = 0;
    $end = 0;
            if(isset($_GET['gt']) && !isset($_GET['idlm']) && !isset($_GET['idld']) && !isset($_GET['id_th']) && !isset($_GET['idkg'])){
                // $dataProduct = $this->model_shop->get_productgender($gt,0);
                print_r('Hello');
            }
    //kiểm tra
            if (isset($_GET['gt']) or isset($_GET['idlm']) or isset($_GET['idld']) or isset($_GET['id_th']) or isset($_GET['idkg'])) {
    // Lấy sản phẩm theo danh mục sản phẩm và giới tính                
                $brand_prod = $this->model_shop->brand($idth);
    //Phân làm 2 là trạng thái lấy sp theo category và lấy bình thường
            if(isset($_GET['sub']) && $_GET['sub'] == 'cat'){
                if($_GET['action'] == 'thuonghieu')
                {
                    $where = " $th $ld $lm";
                    $numProduct = $this->model_shop->phantrangCat($where,$link_query);
                    $numPage = ceil($numProduct/8);
                    $begin = 0;
                    $dataBrand = $this->model_shop->get_ProductFLCat($where,$link_query,$begin);
                    $start = 1;$end = count($dataBrand);
                    if(isset($_GET['page'])){
                        if($_GET['page'] >= 2){
                            $page  = $_GET['page'];
                            $begin = ($page*8)-8;
                            $dataBrand = $this->model_shop->get_ProductFLCat($where,$link_query,$begin);
                            $start = $end+1;$end = ($start+ count($dataBrand)-1);
                        }
                     }
                }else{
                    $where = " $th $gioitinh $ld $lm";
                    $numPage = $this->model_shop->phantrangCat($where,$link_query);
                    $numProduct = $this->model_shop->phantrangCat($where,$link_query);
                    $page = ceil($numPage/8);
                    $begin = 0;
                    $dataProduct = $this->model_shop->get_ProductFLCat($where,$link_query,$begin);
                    $start = 1;$end = count($dataProduct);
                    if(isset($_GET['page'])){
                        if($_GET['page'] >= 2){
                            $page  = $_GET['page'];
                            $begin = ($page*8)-8;
                            $dataProduct = $this->model_shop->get_ProductFLCat($where,$link_query,$begin);
                            $start = $end+1;$end = ($start+ count($dataProduct)-1);
                        }
                    }
                }
            $path = "&sub=cat$namePath1$path1$namePath2$path2$namePath3$path3$namePath4$path4";
            }else{
                $path="$namePath1$path1$namePath2$path2$namePath3$path3$namePath4$path4";
                $brand_prod = $this->model_shop->brand($idth);
                if(isset($_GET['id_th']) && !isset($_GET['gt']) && !isset($_GET['idlm']) && !isset($_GET['idld']) && !isset($_GET['idkg'])){
                    $where_gioitinh = "";
                    $numProduct = $this->model_shop->phantrangSanpham($where_gioitinh, $idth, $idlm, $idld, $link_query);
                    $numPage = ceil($numProduct/8);
                    // if(!isset($_GET['page']) || $_GET['page'] == 1){
                        $begin = 0;
                        $dataBrand = $this->model_shop->dataProduct($where_gioitinh, $idth, $idlm, $idld, $link_query,$begin);
                        $start = 1;$end = count($dataBrand);
                    if(isset($_GET['page'])){
                        if($_GET['page'] >= 2){
                            $page = $_GET['page'];
                            $begin = ($page*8)-8;
                            $dataBrand = $this->model_shop->dataProduct($where_gioitinh, $idth, $idlm, $idld, $link_query,$begin);
                            $start = $end+1;$end = count($dataBrand)+($start-1);
                        }
                    }
                }
                // fix lỗi begin 
                // else if(isset($_GET['gt']) && !isset($_GET['id_th']) && !isset($_GET['idlm']) && !isset($_GET['idld']) && !isset($_GET['idkg'])){
                //     $dataProduct = $this->model_shop->get_productgender($_GET['gt'],0);
                // }
                else{      
                    $where_gioitinh = "s.gioi_tinh = $gt AND";  
                    $numProduct = $this->model_shop->phantrangSanpham($where_gioitinh, $idth, $idlm, $idld, $link_query);          
                    $page = ceil($numProduct/8);
                        $begin = 0;
                        $dataProduct = $this->model_shop->dataProduct($where_gioitinh, $idth, $idlm, $idld, $link_query,$begin);
                        $start = 1;$end = count($dataProduct);
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        $begin = ($page*8)-8;
                        $dataProduct = $this->model_shop->dataProduct($where_gioitinh, $idth, $idlm, $idld, $link_query,$begin);
                        $start = $end+1;$end = count($dataProduct)+($start-1);
                    }
                    
                }
            }

        }
    //Lấy sản phẩm theo khoảng giá
        if (isset($_GET['idkg'])) {
            $id = $_GET['idkg'];
            $data1 = $this->model_shop->get_abPrice($id);
            $a = $data1['gt_1'];
            $b = $data1['gt_2'];
            $numProductArr = $this->model_shop->phantrangPrice($gt, $a, $b);
            $numProduct = count($numProductArr);
            $numPage = ceil((count($numProductArr)/8));
                $begin = 0;
                $dataProduct =  $this->model_shop->get_ProductFlPrice($gt, $a, $b,$begin);
                $start = 1;$end = count($dataProduct);
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                $begin = ($page*8)-8;
                $dataProduct =  $this->model_shop->get_ProductFlPrice($gt, $a, $b,$begin);
                $start = $end+1;$end = ($start+ count($dataProduct)-1);
            }
        }
    //Tìm kiếm sản phẩm theo tên
        if(isset($_GET['search'])){
            $search_name = $_GET['search'];
            $dataProduct = $this->model_shop->search_keyword($search_name);
            $count = count($dataProduct);
            foreach($dataProduct as $value){
                $pricePromo[$value['idsp']] = $value['gia_sp']-(($value['gia_sp']*$value['giatriKM'])/100);
            }
    }
        
        require "view/index.php";
}
             
}
