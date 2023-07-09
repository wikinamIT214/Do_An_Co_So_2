<?php 
require_once("MVC/model/promo.php");
class promocontroller
{
    var $model_promo;
    function __construct()
    {
        $this->model_promo = new promotion();
    }
    function listPromo()
    {
        $data = $this->model_promo->List();
        require("MVC/views/Admin_home/index.php");
    }
    function addPromo()
    {
        $dataBrand = $this->model_promo->getBrand();
        if(isset($_POST['addButton1'])){
                $idPromo = $_POST['sub-idPromo'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $namePromo = $_POST['sub-namePromo'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $typePromo = $_POST['sub-typePromo'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $valuePromo = $_POST['sub-valuePromo'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $typePromotion = $this->model_promo->vn_str_filter(str_replace(' ','',$_POST['typePromo']));
            $arr = array(
                $idPromo => $_POST['idPromo'],
                $namePromo => $_POST['namePromo'],
                $typePromo=>$typePromotion,
                $valuePromo =>$_POST['valuePromo'],
            );
            $status = $this->model_promo->add($arr);   
       if ($status == true) {
           setcookie('add', 'Thêm  thành công', time() + 2);
       } else {
           setcookie('add', 'Thêm  không thành công', time() + 2);
       }
        header("location:?act=khuyenmai");
    }
        require("MVC/views/Admin_home/index.php");
    }
    function deletePromo()
    {
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            $this->model_promo->delete($id);
        }
        header("location:?act=khuyenmai");
    }
    function editPromo()
    {
        $dataBrand = $this->model_promo->getBrand();
        if(isset($_POST['edit']))
        {
            $id = $_POST['edit'];
            $data = $this->model_promo->get_Promo($id);
        }
        require("MVC/views/Admin_home/index.php");
    }
    function updatePromo()
    {
        if(isset($_POST['updateButton'])){
            $stt = $_POST['stt'];
            $idPromo = $_POST['sub-idPromo'];
            //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
            $namePromo = $_POST['sub-namePromo'];
            //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
            $typePromo = $_POST['sub-typePromo'];
            //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
            $valuePromo = $_POST['sub-valuePromo'];
            //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
            $typePromotion = $this->model_promo->vn_str_filter(str_replace(' ','',$_POST['typePromo']));
        $arr = array(
            'stt' => $stt,
            $idPromo => $_POST['idPromo'],
            $namePromo => $_POST['namePromo'],
            $typePromo=>$typePromotion,
            $valuePromo =>$_POST['valuePromo'],
        );
        $status = $this->model_promo->update($arr);   
   if ($status == true) {
       setcookie('update', 'Thêm  thành công', time() + 2);
   } else {
       setcookie('update', 'Thêm  không thành công', time() + 2);
   }
    header("location:?act=khuyenmai");
}
    require("MVC/views/Admin_home/index.php");
    }

}

?>