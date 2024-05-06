<?php
//biến là nơi để lưu trữ giá trị
$a = 7;
$b = 5.5;
$c = "Fpoly";// kiểu dữ liêu chuỗi /chữ
$d = false ;//  đây là kiểu dữ liệu boolean
//echo $c."  ".$b;
// kiểm tra nếu  $a > 5 -> hiển thị ra "đây là số  > 5"
//  nếu  $a <= 5 hiển thị ra đây là số < 5
//if ($a >5) {
//    echo "Đây là số > 5";
//} else {
//    echo "Đây là số < 5";
//}
// mảng là nơi lưu trữ nhiều giá trị
//  mảng tuần tự
$mang = [4,1,2,5];
echo $mang[2];
// khai báo 1 mảng tuần tự gồm [tuoi,namsinh]
// kiểm tra nếu năm hiện tại - năm sinh = tuổi =>hiển thị ra " năm sinh khớp với tuổi"
// ngược  lại nếu năm hiện tại - năm sinh != tuổi => hiển thị ra "năm sinh không khớp với tuổi"
// get current year in php
$mangNamSinh = [21,2003];

if((date("Y")- $mangNamSinh[1]) == $mangNamSinh[0]){
    echo "Tuổi khớp với năm sinh";
} else {
    echo "Tuổi không khớp với năm sinh";
}
// mảng liên hợp
?>
