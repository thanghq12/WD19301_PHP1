<?php
$arrTeacher = [
    ["name"=>"Nguyễn Văn A","year"=>1996,"salary"=>160,"hour"=>8],
    ["name"=>"Nguyễn Văn B","year"=>1998,"salary"=>158,"hour"=>10],
    ["name"=>"Nguyễn Văn C","year"=>1995,"salary"=>160,"hour"=>4],
]
?>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Tên</td>
        <td>Tuổi</td>
        <td>Tổng lương</td>
        <td>Tình Trạng</td>
    </tr>
    <?php foreach ($arrTeacher as $key=>$value) {
            $tongLuong = $value["salary"] * $value["hour"];
            $color = $value["hour"] < 5 ? "red" : "";
            $status = $value["hour"] >=5 ? "Đủ giờ" : "Thiếu giờ";
        ?>
    <tr bgcolor="<?php echo $color;?>">
        <td><?php echo $key + 1; ?></td>
        <td><?php echo $value["name"]; ?></td>
        <td><?php echo date("Y") - $value["year"]; ?></td>
        <td><?php echo  $tongLuong;?></td>
        <td><?php echo $status; ?></td>
    </tr>
    <?php } ?>
</table>
