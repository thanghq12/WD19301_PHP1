<?php
class Product {
    public $db;
    public $table = "product";
    function __construct() // magic function
        ////là hàm khởi tạo khi thực hiện khởi tạo đối tượng hàm này sẽ được chạy đầu tiên
    {
        $this->db = new db();// khởi tạo class DB trong này

    }

    public function getData() { // lấy dữ liệu và hiển thị
        $sql = "SELECT * FROM product";
        return $this->db->getData($sql);
    }
    public function addProduct($name,$price) { //3 tham số truyền vào // tham số truyền dựa trên số lượng trường trên database
        $sql = "INSERT INTO $this->table VALUE (NULL,'$name','$price')";
//        echo $sql;die;
        return $this->db->getData($sql,false);
    }
}
?>