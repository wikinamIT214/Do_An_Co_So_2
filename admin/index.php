<?php 
session_start();
 if(isset($_SESSION['admin']) && $_SESSION['admin'] != null){
    $find = isset($_GET['act']) ? $_GET['act'] : "admin";
    $sub = isset($_GET['sub']) ? $_GET['sub'] : "list";
    switch($find){
        case 'admin':
            require_once("MVC/controller/homeadmincontroller.php");
            $obj_admin = new homeAdminController();
            $obj_admin -> homeAdmin();
        case 'product':
            require_once("MVC/controller/productcontroller.php");
            $obj_admin = new productcontroller();
            switch($sub){
                case "list":
                    $obj_admin -> listProduct();
                    break;
                case "detail":
                    $obj_admin -> detailProduct();
                    break;
                case "delete":
                    $obj_admin -> deleteProduct();
                    break;
                case "add":
                    $obj_admin -> addProduct();
                    break;
                case "edit":
                    $obj_admin -> editProduct();
                    break;
                case "update":
                    $obj_admin -> updateProduct();
                    break;
            }
            break;
        case 'thuonghieu':
            require_once("MVC/controller/detailCategotycontroller.php");
            $obj_admin = new detailCategory();
            switch($sub){
                case "list":
                    $obj_admin->list_detailBrand();
                    break;
                case "delete":
                    $obj_admin->delete_detailBrand();
                    break;
                case "edit":
                    $obj_admin->edit_detailBrand();
                    break;
                case "update":
                    $obj_admin->update_detailBrand();
                    break;
                case "add":
                    $obj_admin->add_detailBrand();
                    break;
            }
            break;
            case 'loaiday':
                require_once("MVC/controller/detailCategotycontroller.php");
                $obj_admin = new detailCategory();
                switch($sub){
                    case "list":
                        $obj_admin->list_detailBrand();
                        break;
                    case "delete":
                        $obj_admin->delete_detailBrand();
                        break;
                    case "edit":
                        $obj_admin->edit_detailBrand();
                        break;
                    case "update":
                        $obj_admin->update_detailBrand();
                        break;
                    case "add":
                        $obj_admin->add_detailBrand();
                        break;
                }
                break;
                case 'loaimay':
                    require_once("MVC/controller/detailCategotycontroller.php");
                    $obj_admin = new detailCategory();
                    switch($sub){
                        case "list":
                            $obj_admin->list_detailBrand();
                            break;
                        case "delete":
                            $obj_admin->delete_detailBrand();
                            break;
                        case "edit":
                            $obj_admin->edit_detailBrand();
                            break;
                        case "update":
                            $obj_admin->update_detailBrand();
                            break;
                        case "add":
                            $obj_admin->add_detailBrand();
                            break;
                    }
                break;
                case 'khoanggia':
                    require_once("MVC/controller/detailCategotycontroller.php");
                    $obj_admin = new detailCategory();
                    switch($sub){
                        case "list":
                            $obj_admin->list_detailBrand();
                            break;
                        case "delete":
                            $obj_admin->delete_detailBrand();
                            break;
                        case "edit":
                            $obj_admin->edit_detailBrand();
                            break;
                        case "update":
                            $obj_admin->update_detailBrand();
                            break;
                        case "add":
                            $obj_admin->add_detailBrand();
                            break;
                    }
                break;
                case 'banner':
                    require_once("MVC/controller/bannercontroller.php");
                    $obj_admin = new bannercontroller();
                    switch($sub){
                        case "list":
                            $obj_admin->listBanner();
                            break;
                        case "delete":
                            $obj_admin->deleteBanner();
                            break;
                        case "edit":
                            $obj_admin->editBanner();
                            break;
                        case "update":
                            $obj_admin->updateBanner();
                           break;
                        case "add":
                            $obj_admin->addBanner();
                            break;
                    }
                break;
                case 'hoadon':
                    require_once("MVC/controller/billcontroller.php");
                    $obj_admin = new billcontroller();
                    switch($sub){
                        case "list":
                            $obj_admin->listBill();
                            break;
                        case "delete":
                            $obj_admin->deleteBill();
                            break;
                        case "detail":
                            $obj_admin->detailBill();
                            break;
                        case "browser":
                            $obj_admin->browserBill();
                           break;
                        // case "add":
                        //     $obj_admin->addBanner();
                        //     break;
                    }
                break;
                case 'nguoidung':
                    require_once("MVC/controller/accountcontroller.php");
                    $obj_admin = new accountcontroller();
                    switch($sub){
                        case "list":
                            $obj_admin->listAccount();
                            break;
                        case "delete":
                            $obj_admin->deleteAccount();
                            break;
                        // case "detail":
                        //     $obj_admin->detailBill();
                        //     break;
                        // case "update":
                        //     $obj_admin->updateBanner();
                        //    break;
                        // case "add":
                        //     $obj_admin->addBanner();
                        //     break;
                    }
                    break;
                    case 'khuyenmai':
                        require_once("MVC/controller/promocontroller.php");
                        $obj_admin = new promocontroller();
                        switch($sub){
                            case "list":
                                $obj_admin->listPromo();
                                break;
                            case "delete":
                                $obj_admin->deletePromo();
                                break;
                            case "edit":
                                $obj_admin->editPromo();
                                break;
                            case "update":
                                $obj_admin->updatePromo();
                               break;
                            case "add":
                                $obj_admin->addPromo();
                                break;
                        }
                        break;
                        case 'phukien':
                            require_once("MVC/controller/accessorycontroller.php");
                            $obj_admin = new accessorycontroller();
                            switch($sub){
                                case "list":
                                    $obj_admin->listAcce();
                                    break;
                                case "delete":
                                    $obj_admin->deleteAcce();
                                    break;
                                case "edit":
                                    $obj_admin->editAcce();
                                    break;
                                case "update":
                                    $obj_admin->updateAcce();
                                   break;
                                case "add":
                                    $obj_admin->addAcce();
                                    break;
                            }
                            break;
                        case 'chitietphukien':
                            require_once("MVC/controller/accessorycontroller.php");
                            $obj_admin = new accessorycontroller();
                            switch($sub){
                                case "list":
                                    $obj_admin->listAcce();
                                    break;
                                case "delete":
                                    $obj_admin->deleteAcce();
                                    break;
                                case "edit":
                                    $obj_admin->editAcce();
                                    break;
                                case "update":
                                    $obj_admin->updateAcce();
                                    break;
                                case "add":
                                    $obj_admin->addAcce();
                                    break;
                            }
                            break;
    }

 }
