<?php 
require_once("MVC/model/bill.php");

class billcontroller
{
    var $model_bill;
    function __construct()
    {
        $this->model_bill = new bill();
    }
    function listBill()
    {
        if(isset($_GET['trangthai'])){
            $id  = $_GET['trangthai'];
            $data = $this->model_bill->status($id);
        }else{
        $data = $this->model_bill->List();}
        require_once("MVC/views/Admin_home/index.php");
    }
    function detailBill(){
        if(isset($_POST['detail'])){
            $id = $_POST['detail'];
            $data = $this->model_bill->get_detailBill($id);
        }
        require_once("MVC/views/Admin_home/index.php");
    }
    function deleteBill()
    {
        if(isset($_POST['delete'])){
            $act = $_GET['act'];
            $id = $_POST['delete'];
            $data = $this->model_bill->delete($id);
        }
        header("location:?act=$act");
    }
    function browserBill()
    {
        if(isset($_POST['browser']))
        {
            $arr = array(
                'MaHD' => $_POST['browser'],
                'trangthai' => 1
            );
            $this->model_bill->update($arr);
        }
        header("location:?act=hoadon");
    }
}
?>