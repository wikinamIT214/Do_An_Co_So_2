<?php
require "model/detail.php";
class detailcontroller{
    var $model_detail ;
    function __construct()
   {
        $this->model_detail = new detail();
   }
    function list_detail(){
          //lấy thương hiệu 
       $data_brand = $this->model_detail->get_brand();
      
       //Lấy loại máy
       $data_machine = $this->model_detail->get_machine();

       //Lấy loại dây
       $data_wire = $this->model_detail->get_wire();
       $data_price = $this->model_detail->ab_price();
       $data_acce = $this->model_detail->accessory();

       if(isset($_GET['id']) or isset($_GET['id_th']) or isset($_GET['gt'])){
            $id = $_GET['id'];
            $id_th = $_GET['id_th'];
            $gt = $_GET['gt'];
            if($gt == 1) $gender = "Nam"; else $gender = "Nữ";
            //Lấy chi tiết sản phẩm
             $detail_prod = $this->model_detail->detail_sp($id);
             //Lấy sản phẩm liên quan
             $prod_connection = $this->model_detail->product_connection($id_th,$gt);
             //Lấy trạng thái còn hàng,hết hàng(CÁCH TẠM THỜI CẦN CHỈNH SỬA)
             $qtyProduct = $this->model_detail->qtyProduct($id);
            if($qtyProduct['So_luong'] < 0 ||  $qtyProduct['So_luong'] == 0)
            {
                $status = 0;
            }else{$status = 1;}
        }else{
            //  $product = $this->model_detail->product(0,5);
        }
        if(isset($_POST['buttonReview']))
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $id_th = isset($_GET['id_th']) ? $_GET['id_th'] : 1;
            $gt = isset($_GET['gt']) ? $_GET['gt'] : 1;
            $hinhanh_1 = "";
            $targert_dir = "public/img/review/";
            $targert_path = $_FILES["imgReview"]["name"];
            $targert_file = $targert_dir . $targert_path;
            $status = move_uploaded_file($_FILES['imgReview']['tmp_name'], $targert_file);
            if ($status) {
                $hinhanh_1 = basename($_FILES["imgReview"]["name"]);
            }
            if(isset($_SESSION['login'])){
                $user = $_SESSION['login']['Ho'].$_SESSION['login']['Ten'];
                $id_user = $_SESSION['login']['maDD'];
            }
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $thoigian = date("Y-m-d h:i:s");
            for($i=1;$i<6;$i++)
            {
                if($i == $_POST['rating']){
                    $rt = $_POST['rating'];
                }
            }
            $arr = array(
                'tieude' => $_POST['titleReview'],
                'tenCmt' => $user,
                'comment' => $_POST['contentReview'],
                'hinhanh_1' =>$hinhanh_1,  
                'rating' => $rt,            
                'id_user' => $id_user,
                'thoigian' => $thoigian,
                'id_sp' => $_POST['idProduct']
            );
            $result = $this->model_detail->insertReview($arr);
            header("location:?action=detail&id=$id&id_th=$id_th&gt=$gt");
        }
        
        $check = 0;
        $checkReview = 0;
        $checkidRv =$this->model_detail->Review();           
        foreach($checkidRv as $row){
            if($row['id_sp'] == $id){
                $checkReview = 1;
                $averageRating = 0;
            $data = $this->model_detail->getReview($id);
            // $this->model_detail->getRating($_GET['id'],$i);
            foreach($data as $value){
                if(isset($_SESSION['login'])){
                    if($value['id_user'] == $_SESSION['login']['maDD']){
                        $check =1;
                    }
                    else{
                        $check = 0;
                    }
                }
            }
                foreach($data as $value)
                {
                    $Rate[] = $value['rating'];
                }
                $countRate = count($Rate);
            }
        }
        $check_quantityInCart = 0;
        if(isset($_SESSION['cart']))
        {
            foreach($_SESSION['cart'] as $value){
                $quantityProduct = $this->model_detail->quantityProduct($value['Product_id']);
                if($value['Product_id'] == $_GET['id']){
                    if($value['Product_quantity'] >= $quantityProduct['So_luong']){
                        $check_quantityInCart = 1;
                    }
                }
            }
        }
            require "view/index.php";
        }
}
?>