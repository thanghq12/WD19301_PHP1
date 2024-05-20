<?php
// ôn tập về Hàm
// không sử dụng hàm
$a = 5;
//if($a % 2 == 0) {
//    echo "Đây là số chẵn";
//} else {
//    echo "Đây là số lẻ";
//}
$b = 6;
//if($b % 2 == 0) {
//    echo "Đây là số chẵn";
//} else {
//    echo "Đây là số lẻ";
//}
$c = 7;
//if($c % 2 == 0) {
//    echo "Đây là số chẵn";
//} else {
//    echo "Đây là số lẻ";
//}
// hàm là đoạn chương trình được viết gọn và mang tính tái sử dụng có thể sử dụng đi sử dụng lại
//sử dụng hàm
// hàm có 2 loại  :
// hàm có trả về dấu hiệu nhận biết => có return  trong hàm
// hàm không trả về  => không có return trong hàm
function ktChanLe($a) { // tất cả những biến nằm trong khe ngoặc được gọi là tham số
    if ($a % 2 == 0) {
        echo "Đây là số chẵn";
    } else {
        echo "Đây là số lẻ";
    }
}
//ktChanLe($a);
//ktChanLe($b); // gọi và sử dụng hàm
//ktChanLe($c);

// xây dựng 1 hàm tinhTong với 2 tham số truyền vào là a và b
// tính tổng a + b trong hàm
// xây dựng  1 hàm tính dien tich hcn với 2 tham số truyền vào là chieudai,chieurong
// kết quả là tính diện tích hcn
$a = 5 ;
$b = 3 ;
function tinhDienTich($chieuDai,$chieuRong) {
    echo "Diện tích là".($chieuDai *$chieuRong);
}

//tinhDienTich(9,10); //viết hàm xong thì phải gọi và sử dụng nó
// hàm có trả về  (Có return)
// là hàm trả về 1 giá trị cụ thể có thể là số,là chữ,là chuỗi
function tinhDienTichCoTraVe($chieuDai,$chieuRong) {
    return $chieuDai * $chieuRong;
}
echo "Diện tích là ".tinhDienTichCoTraVe(5,2);
?>