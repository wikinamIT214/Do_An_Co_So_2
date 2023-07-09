
<?php
$action = isset($_GET['action']) ? $_GET['action'] : "home";
switch ($action) {
    case "home":
        require_once("home-banner/home.php");
        break;
    case "thuonghieu":
        require_once("shop/brand.php");
        break;
    case "phukien":
        require_once("accessory/accessory.php");
        break;
    case "kienthuc":
        require_once("news/news.php");
        break;
    case "khuyenmai":
        require_once("shop/shop.php");
        break;
    case "detail":
        require_once("detail-product/detail-product.php");
        break;
    case "account":
        $mod = isset($_GET['handle']) ? $_GET['handle'] : "login";
        switch ($mod) {
            case "login":
                require_once("login/login.php");
                break;
            case "logout":
                break;
        }
        break;
    case "register":
        require_once("register/register.php");
        break;
    case "Nam":
        $sub = isset($_GET['sub']);
        switch($sub){
            case 'cat';
                require_once("shop/product_men.php");
                break;
        }
        require_once("shop/product_men.php");
        break;
    case "shopNam":
        require_once("shop/product_men.php");
        break;
    case "Nu":
        require_once("shop/product_girl.php");
        break;
    case "shopNu":
        require_once("shop/product_girl.php");
        break;
    case "Capdoi":
        require_once("shop/product_couple.php");
        break;
    case "shopCapdoi":
        require_once("shop/product_couple.php");
        break;
    case "shop":
        require_once("shop/shop.php");
        break;
    case "cart":
        require_once("cart/cart.php");
        break;
    case "checkout":
        $mod = isset($_GET['handle']) ? $_GET['handle'] : "listCheckout";
        switch ($mod) {
            case "listCheckout":
                require_once("checkout/checkout.php");
                break;
            case "checkout_complete":
                require_once("checkout/checkout_complete.php");
                break;
        }
        // // require_once("checkout/checkout.php");
        // break;
}
