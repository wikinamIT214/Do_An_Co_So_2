<?php
session_start();
// session_destroy();
?>
<?php
$mod = isset($_GET['action']) ? $_GET['action'] : "home";
switch ($mod) {
    case 'home':
        require_once('controller/homecotroller.php');
        $controller_obj = new homecontroller();
        $controller_obj->list_danhmuc();
        break;
    case 'thuonghieu':
        $sub = isset($_GET['sub']) ;
        require_once('controller/shopcontroller.php');
        $controller_obj = new shopController;
        $controller_obj->dataShop();
        break;
    case 'phukien':
        require_once('controller/accessorycontroller.php');
        $controller_obj = new accessorycontroller;
        $controller_obj->accessory();
        break;
    case 'kienthuc':
        require_once('controller/newscontroller.php');
        $controller_obj = new newscontroller;
        $controller_obj->news();
        break;
    case 'khuyenmai':
        require_once('controller/promotioncontroller.php');
        $controller_obj = new promotioncontroller;
        $controller_obj->promotionBybrand();
        break;
    case 'Nam':
        $sub = isset($_GET['sub']);
        require_once('controller/shopcontroller.php');
        $controller_obj = new shopController;
        $controller_obj->dataShop();
        break;
    case 'Nu':
        $sub = isset($_GET['sub']);
        require_once('controller/shopcontroller.php');
        $controller_obj = new shopController;
        $controller_obj->dataShop();
        break;
    case 'Capdoi':
        require_once('controller/shopcontroller.php');
        $controller_obj = new shopController;
        $controller_obj->dataShop();
        break;
    case 'shop':
        require_once('controller/shopcontroller.php');
        $controller_obj = new shopController;
        $controller_obj->dataShop();
        break;
    case 'search':
        require_once('controller/searchcontroller.php');
        $controller_obj = new searchController;
        $controller_obj->search_nameProduct();
        break;
    case 'detail':
        require_once('controller/detailcontroller.php');
        $controller_obj = new detailcontroller;
        $controller_obj->list_detail();
    case 'account':
        $mod = isset($_GET['handle']) ? $_GET['handle'] : "login";
        require_once('controller/logincontroller.php');
        $controller_obj = new logincontroller;
        switch ($mod) {
            case "login":
                $controller_obj->login();
                break;
            case "logout":
                $controller_obj->logout();
                break;
        }
        break;
    case 'register':
        require_once('controller/registercontroller.php');
        $controller_obj = new registercontroller;
        $controller_obj->create_account();
        break;
    case 'cart':
        $mod = isset($_GET['handle']) ? $_GET['handle'] : "listCart";
        require_once('controller/cartcontroller.php');
        $controller_obj = new CartController;
        switch ($mod) {
            case "listCart":
                $controller_obj->listCart();
                break;
            case "addCart":
                $controller_obj->addCart();
                break;
            case "deleteCart":
                $controller_obj->deleteCart();
                break;
            case "updateCart":
                $controller_obj->updateCart();
                break;
        }
        break;
    case 'checkout':
        $mod = isset($_GET['handle']) ? $_GET['handle'] : "listCheckout";
        require_once('controller/checkoutcontroller.php');
        $controller_obj = new checkoutcontroller;
        switch ($mod) {
            case "listCheckout":
                $controller_obj->list_checkout();
                break;
            case "save":
                $controller_obj->saveProductInfo_toDB();
                break;
            case "checkout_complete":
                $controller_obj->Checkout_complete();
                break;
            case "address":
                $controller_obj->get_address();
                break;
        }
}
?>