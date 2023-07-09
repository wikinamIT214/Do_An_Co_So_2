<?php
require("MVC/model/product.php");
class productcontroller
{
    var $model_product;
    var $table = "sanpham";
    var $condition = "idsp";
    function __construct()
    {
        $this->model_product = new Product();
    }
    function listProduct()
    {
        $data = $this->model_product->List();
        require("MVC/views/Admin_home/index.php");
    }
    function detailProduct()
    {
        if (isset($_POST['detail'])) {
            $id = $_POST['detail'];
        }
        $data = $this->model_product->detailProduct($id);
        require("MVC/views/Admin_home/index.php");
    }
    function addProduct()
    {
        // $promo = $this->model_product->promotion();
        if (isset($_POST['addButton'])) {
            if ($_FILES['img1Product']['name'] != null or $_FILES['img2Product']['name'] != null or $_FILES['img3Product']['name'] != null) {
                //upload hình ảnh 1
                $hinhanh_1 = "";
                $targert_dir = "../public/img/product/";
                $targert_path = $_FILES["img1Product"]["name"];
                $targert_file = $targert_dir . $targert_path;
                $status = move_uploaded_file($_FILES['img1Product']['tmp_name'], $targert_file);
                if ($status) {
                    $hinhanh_1 = basename($_FILES["img1Product"]["name"]);
                }
                //upload hình ảnh 2
                $hinhanh_2 = "";
                $targert_path = $_FILES["img2Product"]["name"];
                $targert_file = $targert_dir . $targert_path;
                $status = move_uploaded_file($_FILES['img2Product']['tmp_name'], $targert_file);
                if ($status) {
                    $hinhanh_2 = basename($_FILES["img2Product"]["name"]);
                }
                //upload hình ảnh 1
                $hinhanh_3 = "";
                $targert_path = $_FILES["img3Product"]["name"];
                $targert_file = $targert_dir . $targert_path;
                $status = move_uploaded_file($_FILES['img1Product']['tmp_name'], $targert_file);
                if ($status) {
                    $hinhanh_3 = basename($_FILES["img3Product"]["name"]);
                }
            }

            if(isset($_POST['salePercent'])){
                $promo = $_POST['salePercent'];
            }else{
                $promo = "0";
            }
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $thoigian =  date('Y-m-d H:i:s');
            $arr = array(
                'idsp' => $_POST['idProduct'],
                'idTH' => $_POST['codeBrand'],
                'idLM' => $_POST['codeMachine'],
                'idLD' => $_POST['codeWire'],
                'idGT' => $_POST['gender'],
                'ten_sp' => $_POST['nameProduct'],
                'gia_sp' => $_POST['priceProduct'],
                'hinhanh_1' => $hinhanh_1,
                'hinhanh_2' => $hinhanh_2,
                'hinhanh_3' => $hinhanh_3,
                'mota_sp' => $_POST['describeProduct'],
                'sizemat' => $_POST['sizeProduct'],
                'matkinh' => $_POST['glass-surface'],
                'nguon_goc' => $_POST['sourceProduct'],
                'chiu_nuoc' => $_POST['waterproof'],
                'bao_hiem' => $_POST['bhiProduct'],
                'bao_hanh_QT' => $_POST['bhaProduct'],
                'thoigian_them' => $thoigian,
                'So_luong' => $_POST['quantityProduct'],
                'khuyenMai' => $promo,
                'trangThai' => 0
            );
            // print_r($arr);
            $result = $this->model_product->add($arr);
            if ($result == true) {
                setcookie("add", "Thêm sản phẩm thành công", time() + 2);
            } else {
                setcookie("add", "Thêm sản phẩm không thành công", time() + 2);
            }
        }
        require("MVC/views/Admin_home/index.php");
    }
    function updateProduct()
    {
        // $promo = $this->model_product->promotion();
        if ($_FILES['img1Product']['name'] != null or $_FILES['img2Product']['name'] != null or $_FILES['img3Product']['name'] != null) {
            $hinhanh_1 = "";
            $targert_dir = "../public/img/product/";
            $targert_path = $_FILES["img1Product"]["name"];
            $targert_file = $targert_dir . $targert_path;
            $status = move_uploaded_file($_FILES['img1Product']['tmp_name'], $targert_file);
            if ($status) {
                $hinhanh_1 = basename($_FILES["img1Product"]["name"]);
            }else {
                $hinhanh_1 = $_POST['img1.Product'];
            }
            //upload hình ảnh 2
            $hinhanh_2 = "";
            $targert_path = $_FILES["img2Product"]["name"];
            $targert_file = $targert_dir . $targert_path;
            $status = move_uploaded_file($_FILES['img2Product']['tmp_name'], $targert_file);
            if ($status) {
                $hinhanh_2 = basename($_FILES["img2Product"]["name"]);
            }
            //upload hình ảnh 3
            $hinhanh_3 = "";
            $targert_path = $_FILES["img3Product"]["name"];
            $targert_file = $targert_dir . $targert_path;
            $status = move_uploaded_file($_FILES['img1Product']['tmp_name'], $targert_file);
            if ($status) {
                $hinhanh_3 = basename($_FILES["img3Product"]["name"]);
            }
        } else {
            $hinhanh_1 = $_POST['img1-Product'];
            $hinhanh_2 = $_POST['img2-Product'];
            $hinhanh_3 = $_POST['img3-Product'];
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $thoigian =  date('Y-m-d H:i:s');
        if(isset($_POST['salePercent'])){
            $promo = $_POST['salePercent'];
        }else{
            $promo = "0";
        }
        $arr = array(
            'idsp' => $_POST['idProduct'],
            'idTH' => $_POST['codeBrand'],
            'idLM' => $_POST['codeMachine'],
            'idLD' => $_POST['codeWire'],
            'idGT' => $_POST['gender'],
            'ten_sp' => $_POST['nameProduct'],
            'gia_sp' => $_POST['priceProduct'],
            'hinhanh_1' => $hinhanh_1,
            'hinhanh_2' => $hinhanh_2,
            'hinhanh_3' => $hinhanh_3,
            'mota_sp' => $_POST['describeProduct'],
            'sizemat' => $_POST['sizeProduct'],
            'matkinh' => $_POST['glass-surface'],
            'nguon_goc' => $_POST['sourceProduct'],
            'chiu_nuoc' => $_POST['waterproof'],
            'bao_hiem' => $_POST['bhiProduct'],
            'bao_hanh_QT' => $_POST['bhaProduct'],
            'thoigian_them' => $thoigian,
            'So_luong' => $_POST['quantityProduct'],
            'khuyenMai' => $promo,
            'trangThai' => 0
        );
        foreach ($arr as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $arr[$key] = $value;
            }
        }
        $result = $this->model_product->update($arr);
        if ($result == true) {
            setcookie("add", "Thêm sản phẩm thành công", time() + 2);
        } else {
            setcookie("add", "Thêm sản phẩm không thành công", time() + 2);
        }
        header("location:?act=product");
    }
    function editProduct()
    {
        if (isset($_POST['edit'])) {
            $id = $_POST['edit'];
            $dataBrand = $this->model_product->get_brand();
            $dataWire = $this->model_product->get_wire();
            $dataMachine = $this->model_product->get_machine();
            $data = $this->model_product->get_product($id);
        }
        require("MVC/views/Admin_home/index.php");
    }
    function deleteProduct()
    {
        if (isset($_POST['delete'])) {
            $id = $_POST['delete'];
        }
        $data = $this->model_product->delete($id);
        header("location:?act=product");
        // require("MVC/views/Admin_home/index.php");
    }
}
