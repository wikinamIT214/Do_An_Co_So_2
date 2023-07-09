<?php 
require_once('MVC/model/homeAdmin.php');
class homeAdminController
{
    var $model_homeAdmin;
    function __construct()
    {
        $this->model_homeAdmin = new homeAdmin;

    }
    function homeAdmin()
    {
        $data = $this->model_homeAdmin->Recent_order();
        require_once("MVC/views/Admin_home/index.php");
    }
    // function logout_admin()
    // {
    //     if(isset($_SESSION['admin']))
    //     {
    //         unset($_SESSION['admin']);
            
    //     }
    //     header("location:../?action=home");
    // }
}
?>