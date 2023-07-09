<?php
require_once("model/cart.php");
class CartController
{
    var $model_cart;
    public function __construct()
    {
        $this->model_cart = new Cart();
    }
    function listCart()
    {
        $data_brand = $this->model_cart->get_brand();

        //Lấy loại máy
        $data_machine = $this->model_cart->get_machine();

        //Lấy loại dây
        $data_wire = $this->model_cart->get_wire();

        //Lấy ảnh giới thiệu 
        $anh_gt = $this->model_cart->get_anhgt(0, 6);
        //Lấy loại shop
        $loaiShop = $this->model_cart->loaiShop();
        //Lấy banner
        $banner = $this->model_cart->banner();
        $data_price = $this->model_cart->ab_price();
        $data_bestSelling = $this->model_cart->bestSelling();

        //    $newproduct = $this->model_cart->product(0,6);
        $total = 0;
        if (isset($_SESSION['cart'])) {
            $count = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                $total += $value['Product_subtotal'];
                $count++;
            }
        }
        $notifi = "";
        require_once("view/index.php");
    }
    function addCart()
    {
        $count = 0;
        $total = 0;
        if (isset($_SESSION['cart'])) {
            $verify = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($_SESSION['cart'][$key]['Product_id'] == $_POST['Product_id']) {
                    $verify++;
                    $_SESSION['cart'][$key]['Product_quantity'] = $_SESSION['cart'][$key]['Product_quantity'] + $_POST['Product_quantity'];
                    $_SESSION['cart'][$key]['Product_subtotal'] = $_SESSION['cart'][$key]['Product_price'] * $_SESSION['cart'][$key]['Product_quantity'];
                }
            }
            if ($verify == 0) {
                $data = array(
                    'Product_id' => $_POST['Product_id'],
                    'Product_name' => $_POST['Product_name'],
                    'Product_price' => $_POST['Product_price'],
                    'Product_image' => $_POST['Product_image'],
                    'Product_quantity' => $_POST['Product_quantity'],
                    'Product_size' => $_POST['Product_size'],
                    'Product_brand' => $_POST['Product_brand'],
                    'Product_subtotal' => $_POST['Product_price'] * $_POST['Product_quantity']
                    // 'total'=>0
                );
                $_SESSION['cart'][] = $data;
            }
        } else {
            $data = array(
                'Product_id' => $_POST['Product_id'],
                'Product_name' => $_POST['Product_name'],
                'Product_price' => $_POST['Product_price'],
                'Product_image' => $_POST['Product_image'],
                'Product_quantity' => $_POST['Product_quantity'],
                'Product_size' => $_POST['Product_size'],
                'Product_brand' => $_POST['Product_brand'],
                'Product_subtotal' => $_POST['Product_price'] * $_POST['Product_quantity']
                // 'total'=>0
            );
            $_SESSION['cart'][] = $data;
        }
        foreach ($_SESSION['cart'] as $key => $value) {
            $total += $value['Product_subtotal'];
        }

        //  require_once("view/index.php");
        header('location:?action=cart');
    }
    function deleteCart()
    {
        $data_brand = $this->model_cart->get_brand();

        //Lấy loại máy
        $data_machine = $this->model_cart->get_machine();

        //Lấy loại dây
        $data_wire = $this->model_cart->get_wire();

        //Lấy ảnh giới thiệu 
        $anh_gt = $this->model_cart->get_anhgt(0, 6);
        //Lấy loại shop
        $loaiShop = $this->model_cart->loaiShop();
        //Lấy banner
        $banner = $this->model_cart->banner();
        $data_acce = $this->model_cart->accessory();


        $total = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($_SESSION['cart'][$key]['Product_id'] == $_GET['id_sp']) {
                    unset($_SESSION['cart'][$key]);
                }
                header("location:index.php?action=cart&handle=listCart");
            }
        } else {
            header("location:?action=cart&handle=listCart");
        }
    }
    function updateCart()
    {
        $soluong = "";
        if (isset($_POST['update'])) {
            $qtnProduct = $this->model_cart->quantityProduct($_POST['update']);
            foreach ($_POST['qtn'] as $key1 => $qtn) {
                foreach ($_SESSION['cart'] as $key => $value) {
                    if ($_SESSION['cart'][$key]['Product_id'] == $_POST['update']) {
                        $_SESSION['cart'][$key]['Product_quantity'] = $qtn;
                        $_SESSION['cart'][$key]['Product_subtotal'] = $_SESSION['cart'][$key]['Product_quantity'] * $value['Product_price'];
                        if($qtn > $qtnProduct['So_luong']){
                            $_SESSION['cart'][$key]['Product_quantity'] = $qtnProduct['So_luong'];
                            setcookie('notifi','số lượng không đủ',time()+2);
                        }
                    }
                }
            }
        }
        header('location:?action=cart');
    }
}
