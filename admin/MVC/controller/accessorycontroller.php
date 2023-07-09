<?php
require_once("MVC/model/accessory.php");

class accessorycontroller
{
    var $model_acce;
    function __construct()
    {
        $this->model_acce = new Accessory();
    }
    function listAcce()
    {
        if(isset($_GET['act']))
        {
            $table = $_GET['act'];
            $condition = $_GET['condition'];
            $data = $this->model_acce->list_modelAcce($table,$condition);
        }
        require("MVC/views/Admin_home/index.php");
    }
    function addAcce()
    {
        $dataAcce = $this->model_acce->get_Acce();
        if(isset($_POST['addButton'])){
            $table = $_GET['act'];
            $condition = $_GET['condition'];
            if($_GET['act'] == "phukien"){
                $idAcce = $_POST['sub-idAcce'];
                $typeAcce = $_POST['sub-typeAcce'];
                $describeAcce = $_POST['sub-describeAcce'];
                $arr = array(
                    $idAcce => $_POST['idAcce'],
                    $typeAcce => $_POST['typeAcce'],
                    $describeAcce => $_POST['describeAcce']
                );
            }
            else if($_GET['act'] == "chitietphukien"){
                $idAcceDetail = $_POST['sub-idAcceDetail'];
                $idAcce = $_POST['sub-idAcce'];
                $nameAcce = $_POST['sub-nameAcce'];
                $priceAcce = $_POST['sub-priceAcce'];
                $imgAcce = $_POST['sub-imgAcce'];
                $colorAcce = $_POST['sub-colorAcce'];
                $materialAcce = $_POST['sub-materialAcce'];
                $sizeAcce = $_POST['sub-sizeAcce'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $thoigian =  date('Y-m-d H:i:s'); 
                if($_FILES['imgAcce'] != null)
                {
                    $hinhanh = "";
                    $targert_dir = "../public/img/phukien/";
                    $targert_path = $_FILES['imgAcce']['name'];
                    $targert_file = $targert_dir . $targert_path;
                    $status = move_uploaded_file($_FILES['imgAcce']['tmp_name'],$targert_file);
                    if($status){
                        $hinhanh = basename($_FILES['imgAcce']['name']);
                    }
                }else{
                    $hinhanh = "";
                }
                $arr = array(
                    $idAcce => $_POST['idAcce'],
                    $idAcceDetail => $_POST['idAcceDetail'],
                    $nameAcce => $_POST['nameAcce'],
                    $priceAcce => $_POST['priceAcce'],
                    $imgAcce => $hinhanh,
                    $materialAcce => $_POST['materialAcce'],
                    $colorAcce => $_POST['colorAcce'],
                    $sizeAcce => $_POST['sizeAcce'],
                    'thoigian' => $thoigian
                );

            }
            $this->model_acce->add_modelAcce($arr,$table);
            header("location:?act=$table&condition=$condition");
        }
        require("MVC/views/Admin_home/index.php");
    }
    function deleteAcce()
    {
       if(isset($_POST['delete']))
       {
            $table = $_GET['act'];
            $condition = $_GET['condition'];
            $id = $_POST['delete'];
            $this->model_acce->delete_modelAcce($id,$table,$condition);
            header("location:?act=$table&condition=$condition");
       }
    }
    function editAcce()
    {
        $dataAcce = $this->model_acce->get_Acce();
        if(isset($_POST['edit'])){
            $table = $_GET['act'];
            $condition = $_GET['condition'];
            $id = $_POST['edit'];
            $data = $this->model_acce->edit_modelAcce($id,$table,$condition);
        }
        require("MVC/views/Admin_home/index.php");
    }
    function updateAcce()
    {
        if(isset($_POST['updateButton'])){
            $table = $_GET['act'];
            $condition = $_GET['condition'];
            if($_GET['act'] == "phukien"){
                $idAcce = $_POST['sub-idAcce'];
                $nameAcce = $_POST['sub-nameAcce'];
                $describeAcce = $_POST['sub-describeAcce'];
                $arr = array(
                    $idAcce => $_POST['idAcce'],
                    $nameAcce => $_POST['nameAcce'],
                    $describeAcce => $_POST['describeAcce'],

                );
            }else if($_GET['act'] == "chitietphukien"){
                $idAcceDetail = $_POST['sub-idAcceDetail'];
                $idAcce = $_POST['sub-idAcce'];
                $nameAcce = $_POST['sub-nameAcce'];
                $priceAcce = $_POST['sub-priceAcce'];
                $imgAcce = $_POST['sub-imgAcce'];
                $colorAcce = $_POST['sub-colorAcce'];
                $materialAcce = $_POST['sub-materialAcce'];
                $sizeAcce = $_POST['sub-sizeAcce'];
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $thoigian =  date('Y-m-d H:i:s'); 
                if($_FILES['imgAcce'] != null)
                {
                    $hinhanh = "";
                    $targert_dir = "../public/img/phukien/";
                    $targert_path = $_FILES['imgAcce']['name'];
                    $targert_file = $targert_dir . $targert_path;
                    $status = move_uploaded_file($_FILES['imgAcce']['tmp_name'],$targert_file);
                    if($status){
                        $hinhanh = basename($_FILES['imgAcce']['name']);
                    }
                }else{
                    $hinhanh = $_POST['imgAcce1'];
                }
                $arr = array(
                    $idAcce => $_POST['idAcce'],
                    $idAcceDetail => $_POST['idAcceDetail'],
                    $nameAcce => $_POST['nameAcce'],
                    $priceAcce => $_POST['priceAcce'],
                    $imgAcce => $hinhanh,
                    $materialAcce => $_POST['materialAcce'],
                    $colorAcce => $_POST['colorAcce'],
                    $sizeAcce => $_POST['sizeAcce'],
                    'thoigian' => $thoigian
                );

            }
            $this->model_acce->update_modelAcce($arr,$table,$condition);
            header("location:?act=$table&condition=$condition");
        }
    }
}


?>