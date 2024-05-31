<?php
class ProductController {
    public function index() {
        //
        $product = new Product(); // chính là cái model
        $products = $product->getData();
//        var_dump($products); // kiểm tra xem dữ liệu đã chảy được xuống đây hay chưa
        include_once "views/product/index.php";
    }
    public function add() {
        if (isset($_POST["add"])) { // khi người dùng ấn vào nút thêm
            $product = new Product(); // thực hiện new Model
            $name = $_POST['name'];
            $price = $_POST['price'];
            $result = $product->addProduct($name,$price);
            echo "Thêm thành công";
        }
        include_once "views/product/add.php";
    }
    public function edit() {
        echo "Đây là trang sửa sản phẩm";
    }
}
?>