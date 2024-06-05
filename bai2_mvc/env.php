<?php
//cấu hình để kết nối tới CSDL
const DBNAME = "WD19301"; // thay đổi thành thông tin db phù hợp
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/WEB2014_WD19301/bai2_mvc/";

function redirect($yourURL) {
    echo ("<script>location.href='$yourURL'</script>");
}

?>