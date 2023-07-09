<?php 
require_once("MVC/model/account.php");

class accountcontroller
{
    var $model_account ;
    function __construct()
    {
        $this->model_account = new account();
    }
    function listAccount()
    {
        $data = $this->model_account->List();
        require("MVC/views/Admin_home/index.php");
    }
    function detailAccount()
    {
        if(isset($_POST['maDD'])){
            $id = $_POST['maDD'];
            $data = $this->model_account->detail($id);
        }
    }
    function deleteAccount()
    {
        if(isset($_POST['delete'])){
            $act = $_GET['act'];
            $id = $_POST['delete'];
            $this->model_account->delete($id);
        }
        header("location:?act=$act");
    }
}

?>