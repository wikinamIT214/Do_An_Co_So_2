<?php
require("MVC/model/detailCategory.php");

class  detailCategory
{
    var $model_detailCat;
    function __construct()
    {
        $this->model_detailCat = new detailCat;
    }
    function list_detailBrand()
    {
        $table = $_GET['act'];
        $condition = $_GET['condition'];
        $data = $this->model_detailCat->listCat($table,$condition);
        require_once("MVC/views/Admin_home/index.php");
    }
    function add_detailBrand()
    {
        if (isset($_POST['addButton1'])) {
            $table = $_GET['act'];
            $condition = $_GET['condition'];
             if(isset($_POST['value1']) && isset($_POST['value2']))
             {
                $id = $_POST['sub-id'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $name = $_POST['sub-name'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $value1 = $_POST['sub-value1'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $value2 = $_POST['sub-value2'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $arr = array(
                    $id => $_POST['id'],
                    $name => $_POST['name'],
                    $value1=>$_POST['value1'],
                    $value2=>$_POST['value2']
                );
                $status = $this->model_detailCat->addCat($table, $arr);
                if ($status == true) {
                    setcookie('addCat', 'Thêm thương hiệu thành công', time() + 2);
                } else {
                    setcookie('addCat', 'Thêm thương hiệu không thành công', time() + 2);
                }
                //Tạo biến condition ở phần header để khi nhảy sang trang list sẽ không bị lỗi biến $condition không được tìm;
                header("location:?act=$table&condition=$condition");
            }else{
                $hinhanh = "";
                $targer_dir = "../public/img/";
                $img_path = basename($_FILES['img']['name']);
                $targer_file = $targer_dir . $img_path;
                $result = move_uploaded_file($_FILES['img']['tmp_name'], $targer_file);
                if ($result) {
                    $hinhanh = basename($_FILES['img']['name']);
                }
                $id = $_POST['sub-id'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $name = $_POST['sub-name'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $describe = $_POST['sub-describe'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $img = $_POST['sub-img'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $arr = array(
                    $id => $_POST['id'],
                    $name => $_POST['name'],
                    $describe => $_POST['describe'],
                    $img => $hinhanh
                );
                $status = $this->model_detailCat->addCat($table, $arr);
                if ($status == true) {
                    setcookie('addCat', 'Thêm thương hiệu thành công', time() + 2);
                } else {
                    setcookie('addCat', 'Thêm thương hiệu không thành công', time() + 2);
                }
                //Tạo biến condition ở phần header để khi nhảy sang trang list sẽ không bị lỗi biến $condition không được tìm;
                header("location:?act=$table&condition=$condition");
            }
        }
        require("MVC/views/Admin_home/index.php");
    }
    function edit_detailBrand()
    {
        if (isset($_POST['edit'])) {
            $table = $_GET['act'];
            $condition = $_POST['condition'];
            $id = $_POST['edit'];
        }
        $data = $this->model_detailCat->detailCat($table, $condition, $id);
        require_once("MVC/views/Admin_home/index.php");
    }
    function delete_detailBrand()
    {
        if (isset($_POST['delete'])) {
            $table = $_GET['act'];
            $condition = $_POST['condition'];
            $id = $_POST['delete'];
            $data = $this->model_detailCat->deleteCat($table, $condition, $id);
            header("location:?act=$table&condition=$condition");
        }
    }
    function update_detailBrand()
    {
        if (isset($_POST['updateButton'])) {
            $table = $_GET['act'];
            $condition = $_GET['condition'];


            if ($_FILES['img']['name'] != null) {
                $hinhanh = "";
                $targer_dir = "../public/img/";
                $img_path = basename($_FILES['img']['name']);
                $targer_file = $targer_dir . $img_path;
                $result = move_uploaded_file($_FILES['img']['tmp_name'], $targer_file);
                if ($result) {
                    $hinhanh = basename($_FILES['img']['name']);
                }
            } else {
                $hinhanh = $_POST['img-sub'];
            }
            if(isset($_POST['value1']) && isset($_POST['value2'])){
                $id = $_POST['sub-id'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $name = $_POST['sub-name'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $img = $_POST['sub-img'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                 $describe = $_POST['sub-describe'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $value1 = $_POST['sub-value1'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $value2 = $_POST['sub-value2'];
                 //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $arr = array(
                    $id => $_POST['id'],
                    $name => $_POST['name'],
                    $value1 =>$_POST['value1'],
                    $value2=>$_POST['value2']
                );
                $this->model_detailCat->updateCat($table, $condition, $arr);
            }else{
                $id = $_POST['sub-id'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $name = $_POST['sub-name'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $describe = $_POST['sub-describe'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $img = $_POST['sub-img'];
                //tạo biện của trường trong bảng = post phần dữ liệu từ form lên(lấy tên trường)
                $arr = array(
                    $id => $_POST['id'],
                    $name => $_POST['name'],
                    $describe => $_POST['describe'],
                    $img => $hinhanh
                );
                $this->model_detailCat->updateCat($table, $condition, $arr);
        }
    }
        header("location:?act=$table&condition=$condition");
    }
}
