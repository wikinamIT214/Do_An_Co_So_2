<?php 
require_once("MVC/model/banner.php");

class bannercontroller
{
    var $model_banner;
    function __construct()
    {
        $this->model_banner = new banner();
    }
    function listBanner()
    {
        $table = $_GET['act'];
        $data = $this->model_banner->list_banner($table);
        require("MVC/views/Admin_home/index.php");
    }
    function addBanner()
    {
        $promo = $this->model_banner->promotion();
        $brand = $this->model_banner->brandAD();
        if(isset($_POST['addButton1']))
        {
                $table = $_GET['act'];
                $condition = $_GET['condition'];
                $hinhanh = "";
                $targer_dir = "../public/img/home/";
                $img_path = basename($_FILES['img']['name']);
                $targer_file = $targer_dir . $img_path;
                $result = move_uploaded_file($_FILES['img']['tmp_name'], $targer_file);
                if ($result) {
                    $hinhanh = basename($_FILES['img']['name']);
                }
                $id = $_POST['sub-id'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $img = $_POST['sub-img'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $title = $_POST['sub-title'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $describe = $_POST['sub-describe'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $path = $_POST['sub-path'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $promo = $_POST['sub-promo'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $promoBrand = $_POST['sub-promoBrand'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date =  date('Y-m-d H:i:s'); 
                $arr = array(
                    $id => $_POST['id'],
                    $img => $hinhanh,
                    $title=>$_POST['title'],
                    $describe =>$_POST['describe'],
                    $path=>$_POST['path'],
                    $promo => $_POST['promo'],
                    $promoBrand => $_POST['promoBrand'],
                    'thoigian' => $date
                );
                $status = $this->model_banner->add_banner($table, $arr);
                if ($status == true) {
                    setcookie('addCat', 'Thêm thương hiệu thành công', time() + 2);
                } else {
                    setcookie('addCat', 'Thêm thương hiệu không thành công', time() + 2);
                }
            header("location:?act=$table&condition=$condition");
        }
        require("MVC/views/Admin_home/index.php");
    }
    function deleteBanner()
    {
        if (isset($_POST['delete'])) {
            $table = $_GET['act'];
            $condition = $_POST['condition'];
            $id = $_POST['delete'];
            $data = $this->model_banner->deleteCat($table, $condition, $id);
            header("location:?act=$table&condition=$condition");
        }
    }
    function editBanner()
    {
        $promo = $this->model_banner->promotion();
        $brand = $this->model_banner->brandAD();
        if (isset($_POST['edit'])) {
            $table = $_GET['act'];
            $condition = $_POST['condition'];
            $id = $_POST['edit'];
        }
        $data = $this->model_banner->detailCat($table, $condition, $id);
        require_once("MVC/views/Admin_home/index.php");
    }
    function updateBanner()
    {
        if (isset($_POST['updateButton'])) {
            $table = $_GET['act'];
            $condition = $_GET['condition'];


            $table = $_GET['act'];
            $condition = $_GET['condition'];
            $hinhanh = "";
            $targer_dir = "../public/img/home/";
            $img_path = basename($_FILES['img']['name']);
            $targer_file = $targer_dir . $img_path;
            $result = move_uploaded_file($_FILES['img']['tmp_name'], $targer_file);
            if ($_FILES['img']['name'] != null) {
                $hinhanh = basename($_FILES['img']['name']);
            }else{
                $hinhanh = $_POST['img1'];
            }
            $id = $_POST['sub-id'];
            //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
            $img = $_POST['sub-img'];
             //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
             $title = $_POST['sub-title'];
             //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
             $describe = $_POST['sub-describe'];
             //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
             $path = $_POST['sub-path'];
             //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
             $promo = $_POST['sub-promo'];
             //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
             $promoBrand = $_POST['sub-promoBrand'];
             //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
            $arr = array(
                $id => $_POST['id'],
                $img => $hinhanh,
                $title=>$_POST['title'],
                $describe =>$_POST['describe'],
                $path=>$_POST['path'],
                $promo => $_POST['promo'],
                $promoBrand => $_POST['promoBrand']
            );
            $status = $this->model_banner->updateCat($table, $condition, $arr);
            if ($status == true) {
                setcookie('addCat', 'Thêm thương hiệu thành công', time() + 2);
            } else {
                setcookie('addCat', 'Thêm thương hiệu không thành công', time() + 2);
            }
            
    }
        header("location:?act=$table&condition=$condition");
    }


}
