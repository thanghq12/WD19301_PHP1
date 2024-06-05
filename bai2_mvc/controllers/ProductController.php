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
            $url = BASE_URL."/?url=list-product";
            redirect($url);
        }
        include_once "views/product/add.php";
    }
    public function edit() {
        $product = new Product();
        // lấy data theo id
        if (!isset($_GET['id'])) {
            echo "Không tồn tại trang";
            die;
        }
        $id = $_GET['id'];
        $productDetail =  $product->getProductById($id);
        if (isset($_POST['edit'])) {
            $name = $_POST["name"];
            $price = $_POST["price"];

            $product->updateProduct($id,$name,$price);
            $url = BASE_URL."/?url=list-product";
            redirect($url);
        }
        include_once "views/product/edit.php";
    }
    public function delete() {
        if (!isset($_GET['id'])) {
            echo "Không tồn tại id để xóa";
        }
        $id = $_GET['id'];
        $product = new Product();
        $product->deleteProduct($id);
        $url = BASE_URL."/?url=list-product";
        redirect($url);
    }
}
?>