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
//echo $mang[2];
// khai báo 1 mảng tuần tự gồm [tuoi,namsinh]
// kiểm tra nếu năm hiện tại - năm sinh = tuổi =>hiển thị ra " năm sinh khớp với tuổi"
// ngược  lại nếu năm hiện tại - năm sinh != tuổi => hiển thị ra "năm sinh không khớp với tuổi"
// get current year in php
$mangNamSinh = [21,2003];

//if((date("Y")- $mangNamSinh[1]) == $mangNamSinh[0]){
//    echo "Tuổi khớp với năm sinh";
//} else {
//    echo "Tuổi không khớp với năm sinh";
//}
// mảng liên hợp
$arr = [3,4,5,6];
for($i = 0;$i < count($arr);$i ++) {
    if ($arr[$i] % 2 == 0) {
        echo $arr[$i]."<br>";
    }
}
$tong = 0;
for ($i = 0; $i < count($arr);$i ++) {
    $tong+=$arr[$i]; // tong = tong  + $arr[$i]
                     // tong =  0     + 3 =  3
    //              // tong  = 3 +  4 = 7
    //              tong = 7 +  5 = 12
                    //tong = 12 + 6 = 18
}
echo "Tổng là ".$tong."<br>";

// tính tổng các phần tử trong mảng
// hiển thị các phần tử trong mảng arr là số chẵn
//echo $arr[1]."<br>";
//echo $arr[2]."<br>";
//echo $arr[3]."<br>";

// mảng liên hợp là mảng được tự set vị trí
$mangLh =  ["A"=>5,"B"=>6,"C"=>7,"D"=>8]; // mảng liên hợp
echo $mangLh["A"]."</br>";
echo $mangLh["C"]."</br>";
$mangInfo = ["ten"=>"HQT","nam_sinh"=>1998];
// hiển thị dòng thông tin sau lên web
// tên tôi là HQT tôi 23 tuổi
// số tuổi = năm hiện tại - năm sinh trong mảng info
echo "Tên tôi là ".$mangInfo["ten"]."Tôi ".date("Y") - $mangInfo["nam_sinh"]." Tuổi";
?>
