<?php
// tạo class
class SinhVien {
    //khai báo thuộc tính tức biến class
    public $tenSV;
    public $namSinh;
    public $email;
    //tạo ra phương thức set
    public function setTenSV($tenSV) {
        $this->tenSV = $tenSV;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    // khai báo phương thức tức là hàm trong class
    public function hoc() {
        echo "Học PHP";
    }
    public function thongTinSinhVien() {
        echo "Tên".$this->tenSV."Năm Sinh".$this->namSinh."Email".$this->email;
    }
}
// khởi tạo đối tượng (là hình thức tạo ra nhiều tk sinh viên )
// khởi tạo đối tượng luôn luôn có new
$sv = new SinhVien(); // đây được gọi là khởi tạo đối tượng
//$sv->hoc();
$sv->setTenSV("Thang");
$sv->setNamSinh(2000);
$sv->setEmail("thanghq12@fpt.edu.vn");
// viết tương tự với hàm setNamSinh,setEmail
//$sv->thongTinSinhVien(); // gọi và sử dụng phương thức
//tạo 1 class GiangVien gồm các thuộc tính maGv,TenGV,namSinh,luongF,soGioDay
// tạo phương thức set cho tất cả các thuộc tính trên
// tạo phương thức tinhTuoi có trả về (tuổi = date("Y") - Năm Sinh )
// tạo phương thức tongLuong có trả về (luongF * soGioDay)
// tạo phương thức hienThiThongTin() hiển thị những thông tin gồm tenGV-Tuổi-Tổng lương

class GiangVien {
    public $maGV;
    public $tenGV;
    public $namSinh;
    public $luongF;
    public $soGioDay;
    public function setMaGV($maGV) {
        $this->maGV =$maGV;
    }
    public function setTenGV($tenGV) {
        $this->tenGV =$tenGV;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }
    public function setLuongF($luongF) {
        $this->luongF = $luongF;
    }
    public function setSoGioDay($soGioDay) {
        $this->soGioDay = $soGioDay;
    }
    public function tinhTuoi() {
        return date("Y") - $this->namSinh;
    }
    public function tongLuong() {
        return $this->luongF * $this->soGioDay;
    }
    public function hienThiThongTin() {
        echo "Ten GV".$this->tenGV."Tuổi".$this->tinhTuoi()."Tổng lương".$this->tongLuong();
    }
}

$giangVien = new GiangVien();
$giangVien->setTenGV("Nguyễn Văn A");
$giangVien->setMaGV("GV001");
$giangVien->setNamSinh(2000);
$giangVien->setLuongF(125);
$giangVien->setSoGioDay(5);
$giangVien->hienThiThongTin();
//tạo class HocSinh gồm thuộc tính sau maHS,tenHS,namSinh,Toan,Ly,Hoa
// tạo phương thức set cho tất cả các thuộc tính trên
//tạo phương thức tính điểm trung bình có trả về = (toan+ly+hoa)/3
// tạo phương thức xếp loại có trả về hiển thị như sau
// nếu điểmtb >= 5 đạt
// nếu điểmtb<5 không đạt
// tạo phương thức hiển thị thông tin hs gồm tên-điểmTB-xếp loại
?>

