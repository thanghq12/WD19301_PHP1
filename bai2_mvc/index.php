<?php
include_once "controllers/ProductController.php";
$url = isset($_GET["url"]) ? $_GET["url"] : "/";
$product = new ProductController();
switch ($url) {
    case "list-product":
        $product->index();
    break;
    case "add-product":
        $product->add();
    break;
    case "edit-product":
        $product->edit();
    break;

    //tạo 1 file CustomerController (index,add,edit)
    // tạo url trỏ đến các hàm trong CustomerController làm y như product
}
?>