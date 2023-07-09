<?php
require "model/checkout.php";

class checkoutcontroller
{
    var $model_checkout;
    function __construct()
    {
        $this->model_checkout = new checkout();
    }
    function list_checkout()
    {
        $data_brand = $this->model_checkout->get_brand();

        //Lấy loại máy
        $data_machine = $this->model_checkout->get_machine();

        //Lấy loại dây
        $data_wire = $this->model_checkout->get_wire();

        //Lấy ảnh giới thiệu 
        $anh_gt = $this->model_checkout->get_anhgt(0, 6);
        //Lấy loại shop
        $loaiShop = $this->model_checkout->loaiShop();
        //Lấy banner
        $banner = $this->model_checkout->banner();
        $data_price = $this->model_checkout->ab_price();
        $data_acce = $this->model_checkout->accessory();
        if (isset($_SESSION['cart'])) {
            $count = 0;
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                $total += $value['Product_subtotal'];
                $count++;
            }
        }
        $date = date('d-m-Y');
        $newdate_1 = strtotime('+3 day', strtotime($date));
        $newdate_1 = date('d/m/Y', $newdate_1);
        $newdate_2 = strtotime('+4 day', strtotime($date));
        $newdate_2 = date('d/m/Y', $newdate_2);

        require_once('view/index.php');
    }
    function get_address()
    {
        $address = $_POST['DCCT'] . " " . $_POST['XHTP'];
        $_SESSION['login']['diachi'] = $address;
        // header("location:?action=checkout&handle=listCheckout");
        echo $_SESSION['login']['diachi'];
    }
    function saveProductInfo_toDB()
    {
        // $check = 0;
        if (isset($_POST['address_submit'])) {
            $address = $_POST['DCCT'] . " " . $_POST['XHTP'];
            $_SESSION['login']['diachi'] = $address;
            $check = 1;
            header("location:?action=checkout&handle=listCheckout");
        }
        // if ($_SESSION['login']['diachi']) {
            $address = $_SESSION['login']['diachi'];
            if (isset($_POST['button_order'])) {
                if (isset($_SESSION['cart'])) {
                    $count = 0;
                    $total = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $total += $value['Product_subtotal'];
                        $count++;
                    }
                }
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $ThoiGian =  date('Y-m-d H:i:s');
                $code = mt_rand(0, 9999);
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $data = array(
                            'code' => $code,
                            'ngaytao' => $ThoiGian,
                            'tongtien' => $total,
                            'nguoinhan' => $_POST['nameToOrder'],
                            'diachi' => $address,
                            'sdt' => $_POST['phoneToOrder'],
                            'trangthai' => '0',
                            'tongtien' => $total
                        );
                    }
                    $this->model_checkout->insert_infoToBill($data);
                }
                

                $result = $this->model_checkout->get_infoToBill();
                foreach ($_SESSION['cart'] as $value) {
                    $data = array(
                        'maHD' => $result['MaHD'],
                        'masp' => $value['Product_id'],
                        'code' => $result['code'],
                        'soluong' => $value['Product_quantity'],
                        'gia' => $value['Product_price']
                    );
                    $this->model_checkout->insert_infoToBill_detail($data);
                }
                // $quantityProduct = $this->model_checkout->quantityProd();
                foreach($_SESSION['cart'] as $value){
                    $quantityProduct = $this->model_checkout->quantityProduct($value['Product_id']);
                    $soluong = $quantityProduct['So_luong'] - $value['Product_quantity'];
                    $a = $this->model_checkout->updateQuantity($value['Product_id'],$soluong);
                }
                header("location:?action=checkout&handle=checkout_complete");
            }
        //}
        else{
            header("location:?action=checkout&handle=listCheckout");
        }


        // require_once "view/index.php";
    }
    function Checkout_complete()
    {
        $data_brand = $this->model_checkout->get_brand();

        //Lấy loại máy
        $data_machine = $this->model_checkout->get_machine();

        //Lấy loại dây
        $data_wire = $this->model_checkout->get_wire();

        //Lấy ảnh giới thiệu 
        $anh_gt = $this->model_checkout->get_anhgt(0, 6);
        //Lấy loại shop
        $loaiShop = $this->model_checkout->loaiShop();
        //Lấy banner
        $banner = $this->model_checkout->banner();
        if (isset($_SESSION['cart'])) {
            $count = 0;
            $total = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                $total += $value['Product_subtotal'];
                $count++;
            }
        }
        $date = date('d-m-Y');
        $newdate_1 = strtotime('+3 day', strtotime($date));
        $newdate_1 = date('d/m/Y', $newdate_1);
        $newdate_2 = strtotime('+4 day', strtotime($date));
        $newdate_2 = date('d/m/Y', $newdate_2);

        require_once('view/index.php');
    }
}
