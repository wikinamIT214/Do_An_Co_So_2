<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Trang quản trị</title>
  <!-- loader-->
  <link href="public/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="public/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="public/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="public/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="public/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="public/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="public/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="public/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="public/css/app-style.css" rel="stylesheet" />
  <!-- detail-product Style -->
  <link href="public/css/detailProduct.css" rel="stylesheet">
  <!-- main style -->
  <link href="punblic/css/mainStyle.css"  rel="stylesheet" >

</head>

<body class="bg-theme bg-theme1">

  <!-- Start wrapper-->
  <div id="wrapper">
    <div class="clearfix"></div>
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="page-navber row">
          <div class="col">
            <?php require("header.php") ?>
          </div>
        </div>
        <div class="page-sliderbar row">
          <div class="col-3">
            <?php require("menu.php") ?>
          </div>
          <div class="col-12">
            <?php
            if (isset($_SESSION['admin'])) {
              $find = isset($_GET['act']) ? $_GET['act'] : "admin";
              $sub = isset($_GET['sub']) ? $_GET['sub'] : "list";
              switch ($find) {
                case "admin":
                  require_once "MVC/views/Admin_home/home_admin.php";
                  break;
                case "product":
                  switch ($sub) {
                    case 'list':
                      require_once "MVC/views/Product/listProduct.php";
                      break;
                    case 'detail':
                      require_once "MVC/views/Product/detailProduct.php";
                      break;
                    case 'add':
                      require_once "MVC/views/Product/addProduct.php";
                      break;
                    case 'edit':
                      require_once "MVC/views/Product/editProduct.php";
                      break;
                    default:
                      require_once "MVC/views/Product/listProduct.php";
                      break;
                  }
                  break;
                  case "thuonghieu":
                    switch($sub){
                      case 'list':
                        require_once "MVC/views/category/brand/listBrand.php";
                        break;
                      case 'add':
                        require_once "MVC/views/category/brand/addBrand.php";
                        break;
                      case 'edit':
                        require_once "MVC/views/category/brand/editBrand.php";
                        break;
                    }
                    break;
                  case "loaiday":
                    switch($sub){
                      case 'list':
                        require_once "MVC/views/category/wire/listWire.php";
                        break;
                      case 'add':
                        require_once "MVC/views/category/wire/addWire.php";
                        break;
                      case 'edit':
                        require_once "MVC/views/category/wire/editWire.php";
                        break;
                    }
                    break;
                  case "loaimay":
                    switch($sub){
                      case 'list':
                        require_once "MVC/views/category/machine/listMachine.php";
                        break;
                      case 'add':
                        require_once "MVC/views/category/machine/addMachine.php";
                        break;
                      case 'edit':
                        require_once "MVC/views/category/machine/editMachine.php";
                        break;
                    }
                    break;
                    case "khoanggia":
                      switch($sub){
                        case 'list':
                          require_once "MVC/views/category/aboutPrice/listPrice.php";
                          break;
                        case 'add':
                          require_once "MVC/views/category/aboutPrice/addPrice.php";
                          break;
                        case 'edit':
                          require_once "MVC/views/category/aboutPrice/editPrice.php";
                          break;
                      }
                  break;
                  case "banner":
                    switch($sub){
                      case 'list':
                        require_once "MVC/views/banner/mainBanner/listBannerM.php";
                        break;
                      case 'add':
                        require_once "MVC/views/banner/mainBanner/addBannerM.php";
                        break;
                      case 'edit':
                        require_once "MVC/views/banner/mainBanner/editBannerM.php";
                        break;
                    }
                    break;
                    case "hoadon":
                      switch($sub){
                        case 'list':
                          require_once "MVC/views/bill/listBill.php";
                          break;
                        case 'detail':
                          require_once "MVC/views/bill/detailBill.php";
                          break;
                      }
                      break;
                      case "nguoidung":
                        switch($sub){
                          case 'list':
                            require_once "MVC/views/account/listAccount.php";
                            break;
                          // case 'detail':
                          //   require_once "MVC/views/bill/detailBill.php";
                          //   break;
                          // case 'add':
                          //   require_once "MVC/views/banner/mainBanner/addBannerM.php";
                          //   break;
                          // case 'edit':
                          //   require_once "MVC/views/banner/mainBanner/editBannerM.php";
                          //   break;
                        }
                        break;
                        case "khuyenmai":
                          switch($sub){
                            case 'list':
                              require_once "MVC/views/promotion/listPromo.php";
                              break;
                            case 'add':
                              require_once "MVC/views/promotion/addPromo.php";
                              break;
                            case 'edit':
                              require_once "MVC/views/promotion/editPromo.php";
                              break;
                          }
                          break;
                          case "phukien":
                            switch($sub){
                              case 'list':
                                require_once "MVC/views/accessory/accessory/listAcce.php ";
                                break;
                              case 'add':
                                require_once "MVC/views/accessory/accessory/addAcce.php ";
                                break;
                              case 'edit':
                                require_once "MVC/views/accessory/accessory/editAcce.php ";
                                break;
                            }
                            break;
                            case "chitietphukien":
                              switch($sub){
                                case 'list':
                                  require_once "MVC/views/accessory/accessoryDetail/list_AcceDetail.php ";
                                  break;
                                case 'add':
                                  require_once "MVC/views/accessory/accessoryDetail/add_AcceDetail.php ";
                                  break;
                                case 'edit':
                                  require_once "MVC/views/accessory/accessoryDetail/edit_AcceDetail.php ";
                                  break;
                              }
                              break;
              }
            }

            ?>
          </div>
        </div>
        <div class="overlay toggle-menu"></div>


      </div>


    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>


    <!--Start footer-->
    <?php require_once("footer.php") ?>
    <!--End footer-->



  </div>
  <!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/popper.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="public/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="public/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="public/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="public/js/app-script.js"></script>
  <!-- Chart js -->

  <script src="public/plugins/Chart.js/Chart.min.js"></script>

  <!-- Index js -->
  <script src="public/js/index.js"></script>

  <script src="public/js/changeImg.js"></script>
</body>

</html>